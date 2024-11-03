<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2023 Election Monitor</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <style>
        /* Navigation Bar */

        nav {
            background-color: #d2232a;
            padding: 1rem;
            color: #fff;
            text-align: center;
        }

        nav ul {
            display: flex;
            justify-content: center;
            list-style: none;
            gap: 1.5rem;
        }

        nav ul li {
            display: inline;
        }

        nav ul li a {
            color: #fff;
            text-decoration: none;
            font-weight: bold;
        }

        /* Header section */

        .header {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            padding: 2rem;
            background-color: #fff;
        }

        .header img {
            width: 100%;
            max-width: 500px;
            margin-right: 1.5rem;
            border-radius: 5px;
        }

        .header-content {
            flex: 1;
        }

        .header-content h2 {
            font-size: 1.5rem;
            color: #d2232a;
            margin-bottom: 1rem;
        }

        .header-content p {
            font-size: 1rem;
            line-height: 1.6;
            margin-bottom: 1rem;
        }

        /* Sections */

        .section {
            padding: 2rem 0;
            width: 90%;
            margin: auto;
            max-width: 1200px;
        }

        .section h3 {
            margin-bottom: 1rem;
            color: #d2232a;
        }

        /* Presidential Candidates Carousel */

        .candidates {
            display: flex;
            gap: 1rem;
            overflow-x: auto;
        }

        .candidate-card {
            flex: 0 0 100px;
            background: #fff;
            padding: 1rem;
            text-align: center;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .candidate-card img {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            margin-bottom: 0.5rem;
        }

        /* Voter Education and Video Posts */

        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 1rem;
        }

        .post-card {
            background: #fff;
            padding: 1rem;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .post-card img {
            width: 100%;
            border-radius: 5px;
            margin-bottom: 1rem;
        }

        /* Sidebar */

        .sidebar {
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }

        .newsletter,
        .ad {
            background: #fff;
            padding: 1rem;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .newsletter input[type="email"] {
            width: 100%;
            padding: 0.5rem;
            margin-top: 0.5rem;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .newsletter button {
            background-color: #d2232a;
            color: #fff;
            padding: 0.5rem 1rem;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 0.5rem;
        }

        /* Responsive Styling */

        @media (min-width: 768px) {
            .layout {
                display: flex;
                gap: 2rem;
            }
            .main-content {
                flex: 3;
            }
            .sidebar {
                flex: 1;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <header>
            <nav>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Live Update</a></li>
                    <li><a href="#">Election 2023</a></li>
                    <li><a href="#">Videos</a></li>
                    <li><a href="#">Return To Punch Home Page</a></li>
                </ul>
            </nav>
        </header>