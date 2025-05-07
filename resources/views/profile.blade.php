@extends('layouts.app')

@section('title', 'Profile')

@section('content')
    <style>
        body {
            margin: 0;
            font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
            background-image: url('sidoarjo.jpg'); 
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            color: #333;
        }
        header {
            background-color: #037509;
            color: white;
            padding: 1rem 2rem;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        header h1 {
            margin: 0;
            font-size: 1.5rem;
        }
       
        body {
            font-family: 'Segoe UI', sans-serif;
            background: #f0f2f5;
            margin: 0;
            padding: 0;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 40px 20px;
        }

        .profile-card {
            background: #ffffff;
            border-radius: 12px;
            box-shadow: 0 6px 18px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            padding: 30px;
            text-align: center;
        }

        .profile-photo {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            object-fit: cover;
            border: 3px solid #3498db;
            margin-bottom: 15px;
        }

        .profile-name {
            margin: 10px 0 5px;
            font-size: 1.5em;
            color: #2c3e50;
        }

        .profile-email {
            color: #7f8c8d;
            font-style: italic;
        }

        .profile-description {
            color: #34495e;
            margin: 15px 0;
        }

        .profile-actions {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 10px;
        }

        .edit-btn {
            background: #3498db;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 8px;
            cursor: pointer;
            transition: background 0.3s;
        }

        .edit-btn:hover {
            background: #2980b9;
        }

        .social-icons a {
            margin: 0 8px;
            font-size: 1.2em;
            text-decoration: none;
        }


        footer {
            background-color:#037509;
            color: white;
            text-align: center;
            padding: 1rem;
            margin-top: 2rem;
            font-size: 0.9rem;
        }
        
    </style>
    </head>
    <body>
    <div class="container">
        <div class="profile-card">
            <img src="{{ asset('storage\images\profil.jpg') }}" alt="Foto Profil" class="profile-photo">
            <h2 class="profile-name">Muhammad Han</h2>
            <p class="profile-email">hanepilude@gmail.com</p>
            <p class="profile-description">
                Nama : Alucardo cristiano dingin <br> NIK : 3515109876890001 <br> Alamat : Sidoarjo
            </p>
            <div class="profile-actions">
                <button class="edit-btn">Edit Profil</button>
                <div class="social-icons">
                    <a href="https://www.linkedin.com/login/id" title="LinkedIn">🔗</a>
                    <a href="https://github.com/login?return_to=https%3A%2F%2Fgithub.com%2Fsignup%3Fref_cta%3DSign%2Bup%26ref_loc%3Dheader%2Blogged%2Bout%26ref_page%3D%252F%26source%3Dheader-home" title="GitHub">🐱</a>
                    <a href="https://x.com/i/flow/login" title="Twitter">🐦</a>
                </div>
            </div>
        </div>
    </div>
    </body>
@endsection

