<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Suropriyo Enterprise | Premium Digital Solutions</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        /* =========================================
           GLOBAL RESETS (Overrides Header.css)
           ========================================= */
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Inter', sans-serif !important;
            background-color: #F8FAFC !important;
            color: #475569 !important;
            padding-top: 0px !important; /* Navbar gap fix */
            overflow-x: hidden !important; /* Horizontal scroll lock */
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        /* --- Section Titles --- */
        .section-title {
            font-weight: 800;
            color: #0F172A;
            position: relative;
            padding-bottom: 20px;
            margin-bottom: 20px;
            font-size: clamp(2rem, 5vw, 2.8rem);
            letter-spacing: -0.5px;
            display: inline-block;
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 60px;
            height: 4px;
            background: #2563eb;
            border-radius: 2px;
        }

        .section-subtitle {
            font-size: 1.15rem;
            color: #64748B;
            max-width: 700px;
            margin: 0 auto 50px;
            line-height: 1.7;
        }

        /* =========================================
           HERO SECTION (Transparent over Three.js)
           ========================================= */
        .hero-section {
            /* We leave the background transparent so the Three.js canvas shows through */
            position: relative;
            padding: 200px 0 180px; 
            color: white;
            text-align: center;
            border-bottom: 1px solid rgba(255,255,255,0.05);
        }

        .hero-content {
            position: relative;
            z-index: 10; /* Stays above the 3D canvas */
        }

        .hero-title {
            font-size: clamp(2.8rem, 6vw, 4.5rem);
            font-weight: 800;
            letter-spacing: -1.5px;
            margin-bottom: 25px;
            line-height: 1.2;
            color: #FFFFFF;
            text-shadow: 0 10px 30px rgba(0,0,0,0.5);
        }

        .hero-description {
            font-size: 1.25rem;
            color: #94A3B8;
            max-width: 700px;
            margin: 0 auto 40px;
            line-height: 1.8;
            text-shadow: 0 4px 10px rgba(0,0,0,0.5);
        }

        /* --- Buttons --- */
        .btn-premium-primary {
            background: #FFFFFF !important;
            color: #2563eb !important;
            padding: 16px 40px;
            border-radius: 50px;
            font-weight: 700;
            font-size: 1.1rem;
            text-decoration: none;
            transition: all 0.3s ease;
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
            display: inline-flex;
            align-items: center;
        }

        .btn-premium-primary:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.2);
            color: #1d4ed8 !important;
        }

        .btn-premium-outline {
            background: transparent;
            color: #FFFFFF !important;
            border: 2px solid rgba(255,255,255,0.3);
            padding: 14px 40px;
            border-radius: 50px;
            font-weight: 700;
            font-size: 1.1rem;
            text-decoration: none;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
        }

        .btn-premium-outline:hover {
            background: rgba(255,255,255,0.1);
            border-color: #FFFFFF;
            transform: translateY(-3px);
        }

        /* =========================================
           FLOATING STATS SECTION
           ========================================= */
        .stats-section {
            background: #F8FAFC;
            position: relative;
            z-index: 10;
        }

        .stats-wrapper {
            margin-top: -80px; /* Pulls cards up over the hero background */
            margin-bottom: 60px;
        }

        .premium-stat-card {
            background: #FFFFFF;
            padding: 35px 20px;
            border-radius: 20px;
            text-align: center;
            box-shadow: 0 15px 35px -5px rgba(15, 23, 42, 0.08);
            border: 1px solid #E2E8F0;
            border-bottom: 4px solid #2563eb; 
            transition: transform 0.3s ease;
            height: 100%;
        }

        .premium-stat-card:hover {
            transform: translateY(-5px);
        }

        .stat-number {
            font-size: clamp(2rem, 4vw, 3rem);
            font-weight: 800;
            color: #0F172A;
            margin-bottom: 5px;
            letter-spacing: -1px;
        }

        .stat-label {
            color: #64748B;
            font-weight: 600;
            font-size: 0.9rem;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        /* =========================================
           PREMIUM CARDS (Services & AI)
           ========================================= */
        .content-section {
            background: #F8FAFC;
            padding: 60px 0;
            position: relative;
            z-index: 10;
        }

        .bg-white-section {
            background: #FFFFFF;
        }

        .premium-feature-card {
            background: #FFFFFF;
            border-radius: 24px;
            padding: 40px 30px;
            box-shadow: 0 10px 30px -10px rgba(15, 23, 42, 0.05);
            border: 1px solid #E2E8F0;
            border-top: 5px solid #2563eb; 
            transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
            height: 100%;
            text-align: center;
        }

        .premium-feature-card.alt {
            background: #F8FAFC; /* Subtle contrast for alternating sections */
        }

        .premium-feature-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 40px -12px rgba(37, 99, 235, 0.15);
        }

        .feature-icon-wrapper {
            width: 70px;
            height: 70px;
            background: rgba(37, 99, 235, 0.08);
            color: #2563eb;
            border-radius: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.8rem;
            margin: 0 auto 25px;
            border: 1px solid rgba(37, 99, 235, 0.1);
        }

        .premium-feature-card h3 {
            font-size: 1.35rem;
            font-weight: 800;
            color: #0F172A;
            margin-bottom: 15px;
            letter-spacing: -0.5px;
        }

        .premium-feature-card p {
            color: #64748B;
            line-height: 1.7;
            margin: 0;
            font-size: 0.95rem;
        }

        /* =========================================
           TRUST / CLIENTS SECTION
           ========================================= */
        .trust-section {
            background: #FFFFFF;
            padding: 80px 0;
            position: relative;
            z-index: 10;
            border-top: 1px solid #E2E8F0;
        }

        .client-logo {
            max-width: 120px;
            height: auto;
            filter: grayscale(1) opacity(0.5);
            transition: all 0.3s ease;
        }

        .client-logo:hover {
            filter: grayscale(0) opacity(1);
            transform: scale(1.05);
        }

        /* =========================================
           FINAL CTA SECTION
           ========================================= */
        .premium-cta-section {
            background: #2563eb;
            color: white;
            text-align: center;
            padding: 80px 40px;
            border-radius: 32px;
            margin: 40px 0 80px; 
            position: relative;
            overflow: hidden;
            box-shadow: 0 20px 40px -10px rgba(37, 99, 235, 0.3);
            z-index: 10;
        }

        .premium-cta-section::after {
            content: '';
            position: absolute;
            top: 0; right: 0; bottom: 0; left: 0;
            background: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.08'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
            opacity: 0.5;
            pointer-events: none;
        }

        .cta-content {
            position: relative;
            z-index: 2;
        }

        .cta-title {
            font-size: clamp(2rem, 4vw, 2.8rem);
            font-weight: 800;
            margin-bottom: 20px;
            color: #FFFFFF;
            letter-spacing: -0.5px;
        }

        .cta-description {
            font-size: 1.15rem;
            color: rgba(255,255,255,0.9);
            margin-bottom: 35px;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
        }

        /* =========================================
           MOBILE RESPONSIVENESS
           ========================================= */
        @media (max-width: 991px) {
            .hero-section { padding: 140px 0 140px; }
            .stats-wrapper { margin-top: -60px; }
            .btn-premium-primary, .btn-premium-outline {
                width: 100%;
                justify-content: center;
                margin-bottom: 15px;
            }
        }
        @media (max-width: 768px) {
            .premium-stat-card { margin-bottom: 20px; }
            .content-section { padding: 50px 0; }
            .premium-cta-section {
                padding: 60px 20px;
                border-radius: 20px;
                margin: 20px 15px 60px;
            }
            .client-logo { margin-bottom: 30px; }
        }
    </style>
</head>

<body>

    <section class="hero-section" id="home">
        <div class="hero-content container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <h1 class="hero-title">Digital Solutions Engineered<br>for Modern Businesses</h1>
                    <p class="hero-description">
                        We design and build high-performance websites, mobile applications, and scalable software systems. From idea to deployment — we deliver reliable digital infrastructure tailored to your business.
                    </p>
                    <div class="d-flex flex-column flex-sm-row gap-3 justify-content-center">
                        <a href="<?= base_url() ?>ContactUs" class="btn-premium-primary">
                            Start Your Project
                        </a>
                        <a href="<?= base_url() ?>Services" class="btn-premium-outline">
                            Explore Services
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="stats-section">
        <div class="container stats-wrapper">
            <div class="row g-4 justify-content-center">
                <div class="col-6 col-lg-3">
                    <div class="premium-stat-card">
                        <div class="stat-number text-primary">300+</div>
                        <div class="stat-label">Projects Delivered</div>
                    </div>
                </div>
                <div class="col-6 col-lg-3">
                    <div class="premium-stat-card">
                        <div class="stat-number text-success">99.9%</div>
                        <div class="stat-label">System Uptime</div>
                    </div>
                </div>
                <div class="col-6 col-lg-3">
                    <div class="premium-stat-card">
                        <div class="stat-number text-warning">60%</div>
                        <div class="stat-label">Faster Deployment</div>
                    </div>
                </div>
                <div class="col-6 col-lg-3">
                    <div class="premium-stat-card">
                        <div class="stat-number text-info">24/7</div>
                        <div class="stat-label">Support Active</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="content-section bg-white-section" id="services">
        <div class="container">
            <div class="text-center">
                <h2 class="section-title">Our Core Services</h2>
                <p class="section-subtitle">Custom websites and business applications built for performance, scalability, and user experience. From corporate platforms to complex systems, we deliver reliable solutions.</p>
            </div>
            
            <div class="row g-4 justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="premium-feature-card alt">
                        <div class="feature-icon-wrapper"><i class="fas fa-mobile-alt"></i></div>
                        <h3>Mobile App Development</h3>
                        <p>iOS and Android applications designed for speed and usability. From customer-facing apps to enterprise mobility solutions.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="premium-feature-card alt">
                        <div class="feature-icon-wrapper"><i class="fas fa-desktop"></i></div>
                        <h3>Web Development</h3>
                        <p>Custom websites and business applications built for performance, scalability, and user experience. Reliable platforms for your business.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="premium-feature-card alt">
                        <div class="feature-icon-wrapper"><i class="fas fa-cloud"></i></div>
                        <h3>Cloud Management</h3>
                        <p>Secure hosting, server optimization, and infrastructure management. Ensuring high availability, performance, and data security.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="content-section">
        <div class="container">
            <div class="text-center">
                <span class="badge bg-primary bg-opacity-10 text-primary px-3 py-2 rounded-pill fw-bold mb-3">TECHNOLOGY LEADERSHIP</span>
                <br>
                <h2 class="section-title">Technology That Drives Growth</h2>
                <p class="section-subtitle">We combine modern architecture, intelligent workflows, and data-driven systems to help businesses operate faster, smarter, and more efficiently.</p>
            </div>
            
            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="premium-feature-card">
                        <div class="feature-icon-wrapper"><i class="fas fa-cogs"></i></div>
                        <h3>Custom Business Systems</h3>
                        <p>Tailored solutions like CRM, ERP, and internal tools to streamline operations and improve productivity across your organization.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="premium-feature-card">
                        <div class="feature-icon-wrapper"><i class="fas fa-database"></i></div>
                        <h3>Data & Analytics</h3>
                        <p>Real-time dashboards, reporting systems, and data processing tools to help you make informed business decisions instantly.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="premium-feature-card">
                        <div class="feature-icon-wrapper"><i class="fas fa-shield-alt"></i></div>
                        <h3>Secure Infrastructure</h3>
                        <p>Robust architecture with security-first design, ensuring your applications and data remain protected and highly scalable.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="trust-section">
        <div class="container">
            <div class="text-center mb-5">
                <h3 class="fw-bold text-dark opacity-75">Trusted by Businesses Across Industries</h3>
            </div>
            <div class="row align-items-center justify-content-center text-center g-4">
                <div class="col-6 col-md-4 col-lg-2"><img src="<?= base_url(); ?>assets/g1.png" class="client-logo" alt="Client 1"></div>
                <div class="col-6 col-md-4 col-lg-2"><img src="<?= base_url(); ?>assets/g2.png" class="client-logo" alt="Client 2"></div>
                <div class="col-6 col-md-4 col-lg-2"><img src="<?= base_url(); ?>assets/g3.png" class="client-logo" alt="Client 3"></div>
                <div class="col-6 col-md-4 col-lg-2"><img src="<?= base_url(); ?>assets/g4.png" class="client-logo" alt="Client 4"></div>
                <div class="col-6 col-md-4 col-lg-2"><img src="<?= base_url(); ?>assets/g5.png" class="client-logo" alt="Client 5"></div>
                <div class="col-6 col-md-4 col-lg-2"><img src="<?= base_url(); ?>assets/g6.png" class="client-logo" alt="Client 6"></div>
            </div>
        </div>
    </section>

    <section class="container">
        <div class="premium-cta-section" id="contact">
            <div class="cta-content">
                <h2 class="cta-title">Let’s Build Something Powerful</h2>
                <p class="cta-description">Whether you're launching a new idea or upgrading your existing systems, we deliver scalable, high-quality digital solutions designed for long-term success.</p>
                <div class="d-flex flex-column flex-sm-row gap-3 justify-content-center">
                    <a href="<?= base_url() ?>ContactUs" class="btn-premium-primary" style="color: #2563eb !important;">
                        Get Free Consultation
                    </a>
                    <a href="<?= base_url() ?>Services" class="btn-premium-outline">
                        View Our Work
                    </a>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>
    
    <script>
        const scene = new THREE.Scene();
        const camera = new THREE.PerspectiveCamera(75, window.innerWidth / window.innerHeight, 0.1, 1000);
        const renderer = new THREE.WebGLRenderer({ antialias: true, alpha: false }); // Alpha false so we can set our own background color
        
        renderer.setSize(window.innerWidth, window.innerHeight);
        // Set the background to match our Premium Deep Navy (#0F172A)
        renderer.setClearColor(0x0F172A, 1);
        
        renderer.domElement.style.position = 'fixed';
        renderer.domElement.style.top = '0';
        renderer.domElement.style.left = '0';
        renderer.domElement.style.zIndex = '-1';
        renderer.domElement.style.pointerEvents = 'none';
        document.body.appendChild(renderer.domElement);

        // Updated Materials to match the Brand Blue (#2563eb) and Soft Blue (#60A5FA)
        const nodeMaterial = new THREE.MeshStandardMaterial({
            color: 0x2563eb,
            emissive: 0x1e3a8a,
            metalness: 0.8,
            roughness: 0.2
        });
        const connectorMaterial = new THREE.MeshStandardMaterial({
            color: 0x60A5FA,
            emissive: 0x3b82f6,
            transparent: true,
            opacity: 0.6,
            metalness: 0.9,
            roughness: 0.1
        });
        const wireframeMaterial = new THREE.MeshBasicMaterial({
            color: 0x3b82f6,
            wireframe: true,
            transparent: true,
            opacity: 0.2
        });

        // Particle system for flowing effect
        const particleCount = 500;
        const particles = new THREE.BufferGeometry();
        const positions = new Float32Array(particleCount * 3);
        const colors = new Float32Array(particleCount * 3);
        for (let i = 0; i < particleCount; i++) {
            positions[i * 3] = (Math.random() - 0.5) * 20;
            positions[i * 3 + 1] = (Math.random() - 0.5) * 20;
            positions[i * 3 + 2] = (Math.random() - 0.5) * 20;
            // Shifted particle colors to blue/white spectrum
            colors[i * 3] = Math.random() * 0.3 + 0.3; // R
            colors[i * 3 + 1] = Math.random() * 0.4 + 0.6; // G
            colors[i * 3 + 2] = 1; // B
        }
        particles.setAttribute('position', new THREE.BufferAttribute(positions, 3));
        particles.setAttribute('color', new THREE.BufferAttribute(colors, 3));
        const particleMaterial = new THREE.PointsMaterial({ size: 0.05, vertexColors: true, transparent: true, opacity: 0.4 });
        const particleSystem = new THREE.Points(particles, particleMaterial);
        scene.add(particleSystem);

        const nodes = [];
        const connectors = [];
        const nodeRadius = 0.15;
        const connectorRadius = 0.03;

        function createCluster(type, scale, position) {
            const clusterGroup = new THREE.Group();
            let vertices = [];
            let edges = [];

            if (type === 'octahedron') {
                vertices = [
                    new THREE.Vector3(1, 0, 0), new THREE.Vector3(-1, 0, 0),
                    new THREE.Vector3(0, 1, 0), new THREE.Vector3(0, -1, 0),
                    new THREE.Vector3(0, 0, 1), new THREE.Vector3(0, 0, -1)
                ];
                edges = [
                    [0, 2], [0, 3], [0, 4], [0, 5],
                    [1, 2], [1, 3], [1, 4], [1, 5],
                    [2, 4], [2, 5], [3, 4], [3, 5]
                ];
            } else if (type === 'icosahedron') {
                const t = (1 + Math.sqrt(5)) / 2;
                vertices = [
                    new THREE.Vector3(-1, t, 0), new THREE.Vector3(1, t, 0),
                    new THREE.Vector3(-1, -t, 0), new THREE.Vector3(1, -t, 0),
                    new THREE.Vector3(0, -1, t), new THREE.Vector3(0, 1, t),
                    new THREE.Vector3(0, -1, -t), new THREE.Vector3(0, 1, -t),
                    new THREE.Vector3(t, 0, -1), new THREE.Vector3(t, 0, 1),
                    new THREE.Vector3(-t, 0, -1), new THREE.Vector3(-t, 0, 1)
                ];
                edges = [
                    [0, 1], [0, 5], [0, 7], [0, 10], [0, 11],
                    [1, 5], [1, 7], [1, 8], [1, 9],
                    [2, 3], [2, 4], [2, 6], [2, 10], [2, 11],
                    [3, 4], [3, 6], [3, 8], [3, 9],
                    [4, 5], [4, 9], [4, 11],
                    [5, 9], [5, 11],
                    [6, 7], [6, 8], [6, 10],
                    [7, 8], [7, 10],
                    [8, 9], [9, 10], [10, 11]
                ];
            } else if (type === 'dodecahedron') {
                const phi = (1 + Math.sqrt(5)) / 2;
                vertices = [
                    new THREE.Vector3(1, 1, 1), new THREE.Vector3(1, 1, -1),
                    new THREE.Vector3(1, -1, 1), new THREE.Vector3(1, -1, -1),
                    new THREE.Vector3(-1, 1, 1), new THREE.Vector3(-1, 1, -1),
                    new THREE.Vector3(-1, -1, 1), new THREE.Vector3(-1, -1, -1),
                    new THREE.Vector3(0, phi, 1 / phi), new THREE.Vector3(0, phi, -1 / phi),
                    new THREE.Vector3(0, -phi, 1 / phi), new THREE.Vector3(0, -phi, -1 / phi),
                    new THREE.Vector3(phi, 1 / phi, 0), new THREE.Vector3(phi, -1 / phi, 0),
                    new THREE.Vector3(-phi, 1 / phi, 0), new THREE.Vector3(-phi, -1 / phi, 0),
                    new THREE.Vector3(1 / phi, 0, phi), new THREE.Vector3(-1 / phi, 0, phi),
                    new THREE.Vector3(1 / phi, 0, -phi), new THREE.Vector3(-1 / phi, 0, -phi)
                ];
                edges = [
                    [0, 8], [0, 12], [0, 16], [1, 9], [1, 12], [1, 18],
                    [2, 10], [2, 13], [2, 16], [3, 11], [3, 13], [3, 18],
                    [4, 8], [4, 14], [4, 17], [5, 9], [5, 14], [5, 19],
                    [6, 10], [6, 15], [6, 17], [7, 11], [7, 15], [7, 19],
                    [8, 9], [10, 11], [12, 13], [14, 15], [16, 17], [18, 19]
                ];
            }

            vertices.forEach(vertex => {
                const node = new THREE.Mesh(new THREE.SphereGeometry(nodeRadius, 16, 16), nodeMaterial);
                node.position.copy(vertex).multiplyScalar(scale);
                clusterGroup.add(node);
                nodes.push(node);
            });

            edges.forEach(([a, b]) => {
                const start = vertices[a].clone().multiplyScalar(scale);
                const end = vertices[b].clone().multiplyScalar(scale);
                const direction = end.clone().sub(start);
                const length = direction.length();
                const connector = new THREE.Mesh(new THREE.CylinderGeometry(connectorRadius, connectorRadius, length, 8), connectorMaterial);
                connector.position.copy(start).add(direction.multiplyScalar(0.5));
                connector.lookAt(end);
                clusterGroup.add(connector);
                connectors.push(connector);
            });

            const wireframeGeo = type === 'octahedron' ? new THREE.OctahedronGeometry(scale) :
                type === 'icosahedron' ? new THREE.IcosahedronGeometry(scale) :
                    new THREE.DodecahedronGeometry(scale);
            const wireframe = new THREE.Mesh(wireframeGeo, wireframeMaterial);
            clusterGroup.add(wireframe);

            clusterGroup.position.copy(position);
            scene.add(clusterGroup);
        }

        createCluster('octahedron', 1, new THREE.Vector3(-6, 0, 0));
        createCluster('icosahedron', 0.8, new THREE.Vector3(-3, 1, 0));
        createCluster('dodecahedron', 0.7, new THREE.Vector3(0, 0, 0));
        createCluster('octahedron', 1.2, new THREE.Vector3(3, -1, 0));
        createCluster('icosahedron', 0.9, new THREE.Vector3(6, 0, 0));

        // Upgraded Lighting for Navy Background
        nodes.forEach((node, i) => {
            const lightColor = i % 2 === 0 ? 0x3b82f6 : 0x60A5FA;
            const light = new THREE.PointLight(lightColor, 0.5, 4);
            light.position.copy(node.position);
            scene.add(light);
        });
        const ambientLight = new THREE.AmbientLight(0x0F172A, 1.5);
        scene.add(ambientLight);
        const directionalLight = new THREE.DirectionalLight(0x60A5FA, 0.8);
        directionalLight.position.set(5, 5, 5);
        scene.add(directionalLight);

        camera.position.set(0, 3, 15);

        let mouseX = 0, mouseY = 0;
        document.addEventListener('mousemove', (event) => {
            mouseX = (event.clientX / window.innerWidth) * 2 - 1;
            mouseY = -(event.clientY / window.innerHeight) * 2 + 1;
        });

        function animate() {
            requestAnimationFrame(animate);
            scene.rotation.y += 0.002;
            camera.position.x += (mouseX * 3 - camera.position.x) * 0.05;
            camera.position.y += (mouseY * 3 - camera.position.y) * 0.05;
            camera.lookAt(0, 0, 0);

            const positions = particleSystem.geometry.attributes.position.array;
            for (let i = 0; i < particleCount; i++) {
                positions[i * 3 + 1] += Math.sin(Date.now() * 0.001 + i) * 0.01;
            }
            particleSystem.geometry.attributes.position.needsUpdate = true;

            connectors.forEach((conn, i) => {
                conn.material.emissiveIntensity = 0.5 + 0.3 * Math.sin(Date.now() * 0.0008 + i * 0.5);
            });
            renderer.render(scene, camera);
        }
        animate();

        window.addEventListener('resize', () => {
            const width = window.innerWidth;
            const height = window.innerHeight;
            camera.aspect = width / height;
            camera.updateProjectionMatrix();
            renderer.setSize(width, height);
        });
    </script>
</body>
</html>