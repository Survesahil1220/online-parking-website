# railmad_app.py
from flask import Flask, request, render_template_string
import sqlite3
import numpy as np
from sklearn.linear_model import LogisticRegression
import base64
import os
from datetime import datetime

app = Flask(__name__)

# Database setup
def init_db():
    conn = sqlite3.connect('railmad.db')
    c = conn.cursor()
    c.execute('''CREATE TABLE IF NOT EXISTS trains 
                 (train_id TEXT PRIMARY KEY, name TEXT, status TEXT)''')
    c.execute('''CREATE TABLE IF NOT EXISTS complaints 
                 (id INTEGER PRIMARY KEY AUTOINCREMENT, train_id TEXT, issue TEXT, date TEXT)''')
    # Insert a sample train if not exists
    c.execute("INSERT OR IGNORE INTO trains VALUES (?, ?, ?)", ('TRAIN123', 'Express 123', 'Active'))
    conn.commit()
    conn.close()

# ML Model: Train a simple classifier
def train_model():
    # Synthetic data: 2D "image features" (e.g., [pixel_intensity, edge_count])
    X = np.array([[10, 5], [20, 10], [5, 2], [15, 8], [30, 15], [8, 3]])
    y = ['Broken Seat', 'Dirty Window', 'No Issue', 'Broken Seat', 'Dirty Window', 'No Issue']
    model = LogisticRegression()
    model.fit(X, y)
    return model

# Initialize database and model
init_db()
model = train_model()

# Analyze "image" (simplified: using dummy features)
def analyze_image(image_path):
    # Simulate feature extraction (in reality, use OpenCV/TensorFlow)
    dummy_features = np.random.randint(5, 30, size=(1, 2))  # Random "image" features
    issue = model.predict(dummy_features)[0]
    action = "Passenger can resolve" if issue == "No Issue" else "Send technician"
    return {'issue': issue, 'action': action}

# Single-page app
@app.route('/', methods=['GET', 'POST'])
def index():
    result = None
    train_details = None
    complaints = []
    train_id = 'TRAIN123'  # Default train ID

    if request.method == 'POST':
        train_id = request.form.get('train_id', 'TRAIN123')
        if 'image' in request.files:
            image = request.files['image']
            image_path = f'temp_{image.filename}'
            image.save(image_path)
            result = analyze_image(image_path)
            os.remove(image_path)  # Clean up

            # Database operations
            conn = sqlite3.connect('railmad.db')
            c = conn.cursor()
            
            # Fetch or insert train details
            c.execute("SELECT * FROM trains WHERE train_id = ?", (train_id,))
            train_details = c.fetchone()
            if not train_details:
                c.execute("INSERT INTO trains VALUES (?, ?, ?)", (train_id, f"Express {train_id}", "Active"))
                train_details = (train_id, f"Express {train_id}", "Active")
            
            # Store complaint if issue detected
            if result['issue'] != "No Issue":
                c.execute("INSERT INTO complaints (train_id, issue, date) VALUES (?, ?, ?)",
                         (train_id, result['issue'], datetime.now().strftime('%Y-%m-%d %H:%M:%S')))
            
            # Fetch past complaints
            c.execute("SELECT * FROM complaints WHERE train_id = ? ORDER BY date DESC", (train_id,))
            complaints = c.fetchall()
            conn.commit()
            conn.close()

    # HTML/CSS/JavaScript template
    html = '''
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>RailMad App</title>
        <style>
            body { font-family: Arial, sans-serif; margin: 20px; }
            .section { margin-bottom: 20px; padding: 10px; border: 1px solid #ccc; }
            #complaints { max-height: 200px; overflow-y: auto; }
            img { max-width: 200px; display: none; }
        </style>
    </head>
    <body>
        <h1>RailMad: Railroad Issue Reporter</h1>
        
        <!-- Image Upload Section -->
        <div class="section">
            <h2>Upload Issue Image</h2>
            <form id="uploadForm" method="POST" enctype="multipart/form-data">
                <label>Train ID: <input type="text" name="train_id" value="{{ train_id }}"></label><br>
                <input type="file" name="image" accept="image/*" required onchange="previewImage(this)"><br>
                <img id="preview" src="#" alt="Preview"><br>
                <button type="submit">Analyze</button>
            </form>
        </div>
        
        <!-- Result Section -->
        <div class="section" id="result">
            <h2>Analysis Result</h2>
            {% if result %}
                <p>Issue: {{ result.issue }}</p>
                <p>Action: {{ result.action }}</p>
            {% else %}
                <p>Upload an image to see results.</p>
            {% endif %}
        </div>
        
        <!-- Train Details & Complaints -->
        <div class="section">
            <h2>Train Details</h2>
            {% if train_details %}
                <p>Train ID: {{ train_details[0] }}</p>
                <p>Name: {{ train_details[1] }}</p>
                <p>Status: {{ train_details[2] }}</p>
            {% else %}
                <p>No train details available yet.</p>
            {% endif %}
            
            <h3>Past Complaints</h3>
            <div id="complaints">
                {% for complaint in complaints %}
                    <p>{{ complaint[3] }}: {{ complaint[2] }}</p>
                {% endfor %}
                {% if not complaints %}
                    <p>No past complaints.</p>
                {% endif %}
            </div>
        </div>

        <script>
            function previewImage(input) {
                const preview = document.getElementById('preview');
                if (input.files && input.files[0]) {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        preview.src = e.target.result;
                        preview.style.display = 'block';
                    }
                    reader.readAsDataURL(input.files[0]);
                }
            }

            document.getElementById('uploadForm').addEventListener('submit', function(e) {
                e.preventDefault();
                const formData = new FormData(this);
                fetch('/', { method: 'POST', body: formData })
                    .then(response => response.text())
                    .then(html => {
                        document.body.innerHTML = html;
                    });
            });
        </script>
    </body>
    </html>
    '''
    return render_template_string(html, result=result, train_details=train_details, complaints=complaints, train_id=train_id)

if __name__ == '__main__':
    app.run(debug=True)