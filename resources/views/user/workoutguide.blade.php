<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Workout Guide</title>
    <style>
        /* Reset & Base Styles */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8fafc;
            color: #333;
            line-height: 1.6;
        }
        
        /* Container */
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        
        /* Header */
        .hero {
            background: linear-gradient(135deg, #1e3a8a 0%, #4f46e5 100%);
            color: white;
            padding: 3rem 1rem;
            border-radius: 1rem;
            margin-bottom: 2rem;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        
        .hero h1 {
            font-size: 2.5rem;
            font-weight: 800;
            margin-bottom: 0.5rem;
        }
        
        .hero p {
            color: #bfdbfe;
            font-size: 1.25rem;
            max-width: 800px;
            margin: 0 auto;
        }
        
        /* Cards */
        .card {
            background: white;
            border-radius: 0.5rem;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
            padding: 1.5rem;
            margin-bottom: 1.5rem;
            transition: transform 0.2s, box-shadow 0.2s;
        }
        
        .card:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);
        }
        
        .card-header {
            display: flex;
            align-items: center;
            margin-bottom: 1rem;
        }
        
        .icon {
            background-color: #e0e7ff;
            padding: 0.75rem;
            border-radius: 50%;
            margin-right: 1rem;
        }
        
        .icon svg {
            width: 1.5rem;
            height: 1.5rem;
            color: #4f46e5;
        }
        
        .card h3 {
            font-size: 1.5rem;
            font-weight: 700;
            color: #1e293b;
            margin: 0;
        }
        
        .card p {
            color: #64748b;
            margin-bottom: 1.5rem;
        }
        
        .badge {
            display: inline-block;
            padding: 0.25rem 0.75rem;
            border-radius: 9999px;
            font-size: 0.75rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.05em;
        }
        
        .badge-beginner {
            background-color: #dbeafe;
            color: #1d4ed8;
        }
        
        .badge-intermediate {
            background-color: #dcfce7;
            color: #166534;
        }
        
        .link {
            color: #4f46e5;
            font-weight: 500;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
        }
        
        .link:hover {
            color: #4338ca;
            text-decoration: underline;
        }
        
        .link svg {
            width: 1rem;
            height: 1rem;
            margin-left: 0.25rem;
        }
        
        /* Grid Layout */
        .grid {
            display: grid;
            gap: 1.5rem;
        }
        
        @media (min-width: 768px) {
            .grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }
        
        @media (min-width: 1024px) {
            .grid {
                grid-template-columns: repeat(3, 1fr);
            }
        }
        
        /* Button */
        .btn {
            display: inline-flex;
            align-items: center;
            background-color: #4f46e5;
            color: white;
            padding: 0.75rem 1.5rem;
            border-radius: 0.5rem;
            font-weight: 600;
            box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05);
            transition: all 0.2s;
            text-decoration: none;
            border: none;
            cursor: pointer;
        }
        
        .btn:hover {
            background-color: #4338ca;
            transform: translateY(-1px);
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        
        .btn svg {
            width: 1.25rem;
            height: 1.25rem;
            margin-right: 0.5rem;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Hero Section -->
        <div class="hero">
            <h1>Workout Guide</h1>
            <p>Your comprehensive fitness companion with exercise instructions and video tutorials</p>
        </div>
        
        <!-- Introduction Card -->
        <div class="card">
            <p>A workout guide is a structured plan designed to help you achieve fitness goals effectively and safely. It includes exercises, routines, techniques, and tips to maximize benefits while minimizing injury risks.</p>
        </div>
        
        <!-- Workout Cards Grid -->
        <div class="grid">
            <!-- Push Up Card -->
            <div class="card">
                <div class="card-header">
                    <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                        </svg>
                    </div>
                    <h3>Push Up</h3>
                </div>
                <p>A fundamental bodyweight exercise that strengthens the chest, shoulders, triceps, and core muscles.</p>
                <div style="display: flex; justify-content: space-between; align-items: center;">
                    <span class="badge badge-beginner">Beginner</span>
                    <a href="https://www.youtube.com/watch?v=IODxDxX7oi4" target="_blank" class="link">
                        Watch Tutorial
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                        </svg>
                    </a>
                </div>
            </div>
            
            <!-- Squat Card -->
            <div class="card">
                <div class="card-header">
                    <div class="icon" style="background-color: #dcfce7;">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="#166534">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                        </svg>
                    </div>
                    <h3>Squat</h3>
                </div>
                <p>The king of lower body exercises that targets your glutes, quads, hamstrings, and core.</p>
                <div style="display: flex; justify-content: space-between; align-items: center;">
                    <span class="badge badge-intermediate">Intermediate</span>
                    <a href="https://www.youtube.com/watch?v=aclHkVaku9U" target="_blank" class="link">
                        Watch Tutorial
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                        </svg>
                    </a>
                </div>
            </div>
            
            <!-- Plank Card -->
            <div class="card">
                <div class="card-header">
                    <div class="icon" style="background-color: #ede9fe;">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="#5b21b6">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                        </svg>
                    </div>
                    <h3>Plank</h3>
                </div>
                <p>An isometric core exercise that strengthens your abs, back, and shoulders while being gentle on your back.</p>
                <div style="display: flex; justify-content: space-between; align-items: center;">
                    <span class="badge badge-beginner">Beginner</span>
                    <a href="https://www.youtube.com/watch?v=pSHjTRCQxIw" target="_blank" class="link">
                        Watch Tutorial
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
        
        <!-- Add New Button -->
        <div style="text-align: center; margin-top: 2rem;">
            <button class="btn">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>
                </svg>
                Add New Workout
            </button>
        </div>
    </div>
</body>
</html>