<?php
// PHP section — later, you could dynamically load tools from a database or array
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tech AI | AI Student Tools</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(to bottom right, #e8f5ff, #d6edf7);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .navbar {
            background: #fff;
        }

        .navbar-brand span {
            color: #0d6efd;
            font-weight: bold;
        }

        .section-title {
            text-align: center;
            font-weight: 700;
            color: #0d6efd;
            margin-bottom: 40px;
        }

        /* Tool Cards */
        .tool-card {
            background: #fff;
            border: none;
            border-radius: 12px;
            box-shadow: 0 3px 15px rgba(0,0,0,0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            padding: 20px;
            height: 100%;
        }

        .tool-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 20px rgba(0,0,0,0.15);
        }

        .tool-img {
            width: 100%;
            height: 180px;
            object-fit: contain;
            margin-bottom: 15px;
        }

        .btn-primary {
            background-color: #0d6efd;
            border: none;
            border-radius: 8px;
            padding: 8px 18px;
            transition: background 0.3s;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        footer {
            background-color: #2c2c2cff;
            color: white;
            text-align: center;
            padding: 20px 0;
            margin-top: 40px;
        }

        @media (max-width: 768px) {
            .tool-img {
                height: 150px;
            }
        }
    </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg shadow-sm fixed-top">
    <div class="container">
        <a class="navbar-brand fw-bold" href="#">
            Tech<span>AI</span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item mx-2"><a class="nav-link active" href="index.php">Home</a></li>
                 <!-- Categories Dropdown -->
        <li class="nav-item dropdown mx-2">
          <a class="nav-link dropdown-toggle" href="#" id="categoriesDropdown" role="button" 
             data-bs-toggle="dropdown" aria-expanded="false">
            Categories
          </a>
          <ul class="dropdown-menu" aria-labelledby="categoriesDropdown">
             <li><a class="dropdown-item" href="teaching.php">Teaching Tools</a></li>
            <li><a class="dropdown-item" href="student.php">Student Tools</a></li>
            <li><a class="dropdown-item" href="productivity.php">Productivity Tools</a></li>
            <li><a class="dropdown-item" href="analytics.php">Analytics Tools</a></li>
          </ul>
        </li>

                <li class="nav-item mx-2"><a class="nav-link" href="#tools">Student Tools</a></li>
                <li class="nav-item mx-2"><a class="nav-link" href="#contact">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- Hero Section -->
<section class="pt-5 mt-5 text-center">
    <div class="container">
        <h1 class="fw-bold mb-3">Explore <span class="text-primary">AI Tools for Students</span></h1>
        <p class="text-muted mb-4">Supercharge your studies with AI tools that help you learn smarter, faster, and more effectively.</p>
    </div>
</section>

<!-- Student Tools Section -->
<section id="tools" class="py-5">
    <div class="container">
        <h2 class="section-title">Top AI Tools for Students</h2>
        <div class="row g-4">

            <!-- Tool 1 -->
            <div class="col-md-4 col-sm-6">
                <div class="tool-card">
                    <img src="assets/chat.png" alt="ChatGPT" class="tool-img">
                    <h5 class="fw-bold">ChatGPT</h5>
                    <p class="text-muted">
                        Get help writing essays, solving problems, or explaining difficult topics using natural conversation with AI.
                    </p>
                    <a href="https://chat.openai.com/" target="_blank" class="btn btn-primary">Visit Tool</a>
                </div>
            </div>

            <!-- Tool 2 -->
            <div class="col-md-4 col-sm-6">
                <div class="tool-card">
                    <img src="assets/gram.avif" alt="Grammarly" class="tool-img">
                    <h5 class="fw-bold">Grammarly</h5>
                    <p class="text-muted">
                        Enhance your writing with AI-powered grammar, clarity, and style suggestions for essays and reports.
                    </p>
                    <a href="https://www.grammarly.com/" target="_blank" class="btn btn-primary">Visit Tool</a>
                </div>
            </div>

            <!-- Tool 3 -->
            <div class="col-md-4 col-sm-6">
                <div class="tool-card">
                    <img src="assets/notion.png" alt="Notion AI" class="tool-img">
                    <h5 class="fw-bold">Notion AI</h5>
                    <p class="text-muted">
                        Organize notes, create summaries, and draft study guides effortlessly using Notion’s built-in AI assistant.
                    </p>
                    <a href="https://www.notion.so/product/ai" target="_blank" class="btn btn-primary">Visit Tool</a>
                </div>
            </div>

            <!-- Tool 4 -->
            <div class="col-md-4 col-sm-6">
                <div class="tool-card">
                    <img src="assets/quil.png" alt="QuillBot" class="tool-img">
                    <h5 class="fw-bold">QuillBot</h5>
                    <p class="text-muted">
                        Paraphrase and rewrite your notes or essays using AI-powered language tools that improve readability.
                    </p>
                    <a href="https://quillbot.com/" target="_blank" class="btn btn-primary">Visit Tool</a>
                </div>
            </div>

            <!-- Tool 5 -->
            <div class="col-md-4 col-sm-6">
                <div class="tool-card">
                    <img src="assets/socra.jpeg" alt="Socratic" class="tool-img">
                    <h5 class="fw-bold">Socratic by Google</h5>
                    <p class="text-muted">
                        Snap a photo of your homework or question and get instant AI-powered explanations and step-by-step solutions.
                    </p>
                    <a href="https://socratic.org/" target="_blank" class="btn btn-primary">Visit Tool</a>
                </div>
            </div>

            <!-- Tool 6 -->
            <div class="col-md-4 col-sm-6">
                <div class="tool-card">
                    <img src="assets/elicit.png" alt="Elicit AI" class="tool-img">
                    <h5 class="fw-bold">Elicit</h5>
                    <p class="text-muted">
                        AI research assistant that helps students find academic papers and summarize key findings instantly.
                    </p>
                    <a href="https://elicit.org/" target="_blank" class="btn btn-primary">Visit Tool</a>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Contact Section -->
<section id="contact" class="bg-white py-5">
    <div class="container text-center">
        <h2 class="section-title">Contact Us</h2>
        <p>Have a student AI tool we should feature? Let us know!</p>
        <a href="mailto:info@teachtelligent.com" class="btn btn-primary mt-3">Email Us</a>
    </div>
</section>

<!-- Footer -->
<footer>
    <p>&copy; 2025 Tech AI | Empowering Students with AI</p>
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

