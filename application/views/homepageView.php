<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Suropriyo Enterprise</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

	<link rel="stylesheet" href="<?= base_url(); ?>css/Home.css">
</head>

<body>

	<!-- HERO SECTION - Simplified with Three.js Background -->
	<section class="hero-section" id="home">
		<!-- HERO CONTENT -->
		<div class="hero-content">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<!-- <span style="color: aliceblue;" class="ai-badge">ENGINEERING-FIRST ENTERPRISE</span> -->
						<h1 style="font-size: 30px;">
							Digital Solutions Engineered<br>
							for Modern Businesses
						</h1>

						<p class="lead">
							We design and build high-performance websites, mobile applications, and scalable software
							systems.
							From idea to deployment — we deliver reliable digital infrastructure tailored to your
							business.
						</p>
						<div>
							<a href="<?= base_url() ?>welcome/ContactUs" class="hero-cta">Start Your Project</a>
							<a href="<?= base_url() ?>welcome/Services" class="hero-cta">Explore Services</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


	<!-- STATS SECTION -->
	<section class="stats-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-10">
					<div class="row">
						<div class="col-lg-3 col-md-6">
							<div class="stat-item">
								<div class="stat-number">300+</div>
								<div class="stat-label">Projects Delivered</div>

							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="stat-item">
								<div class="stat-number">99.9%</div>
								<div class="stat-label">System Uptime</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="stat-item">
								<div class="stat-number">60%</div>
								<div class="stat-label">Faster Deployment</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="stat-item">
								<div class="stat-number">24/7</div>
								<div class="stat-label">Support & Monitoring</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- CORE SERVICES -->
	<section class="services-section" id="services">
		<div class="container">
			<div class="row justify-content-center text-center mb-5">
				<div class="col-lg-8">
					<h2 class="section-title">Our Core Services</h2>
					<!-- <p class="section-subtitle">Custom websites and business applications built for performance, scalability, and user experience.
From corporate platforms to complex systems, we deliver reliable solutions.</p> -->
				</div>
			</div>
			<div class="row g-4 justify-content-center">
				<div class="col-lg-4 col-md-6">
					<div class="service-card">
						<div class="service-icon"><i class="fas fa-mobile-alt"></i></div>
						<h3 style="font-size: 1.5rem; margin-bottom: 15px; color: #1d3b7a;">Mobile App Development</h3>
						<p style="color: #1d3b7a;">iOS and Android applications designed for speed and usability.
							From customer-facing apps to enterprise mobility solutions..</p>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="service-card">
						<div class="service-icon"><i class="fas fa-desktop"></i></div>
						<h3 style="font-size: 1.5rem; margin-bottom: 15px; color: #1d3b7a;">Web Development</h3>
						<p style="color: #1d3b7a;">Custom websites and business applications built for performance,
							scalability, and user experience.
							From corporate platforms to complex systems, we deliver reliable solutions.</p>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="service-card">
						<div class="service-icon"><i class="fas fa-cloud"></i></div>
						<h3 style="font-size: 1.5rem; margin-bottom: 15px; color: #1d3d83;">Cloud & Server Management
						</h3>
						<p style="color: #1d3b7a;"> Secure hosting, server optimization, and infrastructure management.
							Ensuring high availability, performance, and data security.</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- AI INNOVATION SECTION -->
	<section class="ai-section">
		<div class="container">
			<div class="row justify-content-center text-center mb-5">
				<div class="col-lg-8">
					<span class="ai-badge mb-4">TECHNOLOGY LEADERSHIP</span>
					<h2 style="font-size: clamp(2.8rem, 6vw, 4.5rem);">Technology That Drives Business Growth
					</h2>
					<p style="color: #ffffff;" class="lead mt-3">
						We combine modern architecture, intelligent workflows, and data-driven systems
						to help businesses operate faster, smarter, and more efficiently.
					</p>
				</div>
			</div>
			<div class="row g-4">
				<div class="col-lg-4 col-md-6">
					<div class="service-card">
						<div class="service-icon"><i class="fas fa-cogs"></i></div>
						<h3 style="color: #1d3d83;">Custom Business Systems</h3>
						<p style="color: #1d3b7a;">Tailored solutions like CRM, ERP, and internal tools to streamline
							operations
							and improve productivity across your organization.</p>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="service-card">
						<div class="service-icon"><i class="fas fa-database"></i></div>
						<h3 style="color: #1d3d83;">Data & Analytics</h3>
						<p style="color: #1d3b7a;">Real-time dashboards, reporting systems, and data processing tools
							to help you make informed business decisions.</p>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="service-card">
						<div class="service-icon"><i class="fas fa-lock"></i></div>
						<h3 style="color: #1d3d83;">Secure Digital Infrastructure</h3>
						<p style="color: #1d3b7a;">Robust architecture with security-first design, ensuring your
							applications
							and data remain protected and scalable.</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- TRUST SECTION -->
	<section class="trust-section">
		<div class="container">
			<div class="row justify-content-center text-center mb-5">
				<div class="col-lg-8">
					<h2 style="font-size: clamp(2.8rem, 6vw, 4.5rem); color: #2563eb;">Trusted by Businesses Across
						Industries </h2>
				</div>
			</div>
			<div class="row text-center mb-5">
				<div class="col-lg-2 col-md-3 col-6 mb-4">
					<img src="<?= base_url(); ?>assets/g1.png" class="client-logo img-fluid" alt="TechCorp">
				</div>
				<div class="col-lg-2 col-md-3 col-6 mb-4">
					<img src="<?= base_url(); ?>assets/g2.png" class="client-logo img-fluid" alt="FinBank">
				</div>
				<div class="col-lg-2 col-md-3 col-6 mb-4">
					<img src="<?= base_url(); ?>assets/g3.png" class="client-logo img-fluid" alt="HealthIO">
				</div>
				<div class="col-lg-2 col-md-3 col-6 mb-4">
					<img src="<?= base_url(); ?>assets/g4.png" class="client-logo img-fluid" alt="Logistix">
				</div>
				<div class="col-lg-2 col-md-3 col-6 mb-4">
					<img src="<?= base_url(); ?>assets/g5.png" class="client-logo img-fluid" alt="EduTech">
				</div>
				<div class="col-lg-2 col-md-3 col-6 mb-4">
					<img src="<?= base_url(); ?>assets/g4.png" class="client-logo img-fluid" alt="Ecommerce Pro">
				</div>
			</div>
			<!-- <div class="row justify-content-center">
				<div class="col-lg-8 text-center">
					<h4 class="mb-4" style="color: #2563eb;">Certified AI Partners</h4>
					<div class="d-flex justify-content-center gap-4 flex-wrap">
						<img src=""
							class="ai-partner img-fluid" alt="OpenAI">
						<img src=""
							class="ai-partner img-fluid" alt="AWS AI">
						<img src=""
							class="ai-partner img-fluid" alt="Azure AI">
						<img src=""
							class="ai-partner img-fluid" alt="Google AI">
					</div>
				</div>
			</div> -->
		</div>
	</section>

	<!-- FINAL AI CTA -->
	<section class="cta-section" id="contact">
		<div class="container">
			<h2>Let’s Build Something Powerful Together</h2>
			<p class="lead">Whether you're launching a new idea or upgrading your existing systems,
				we deliver scalable, high-quality digital solutions designed for long-term success.
			</p>
			<div class="row justify-content-center">
				<div class="col-lg-5 col-md-8">
					<a href="<?= base_url() ?>welcome/ContactUs" class="cta-btn">Get Free Consultation</a>
					<a href="<?= base_url() ?>welcome/Services" class="cta-btn cta-btn-outline">View Our Work</a>
				</div>
			</div>
		</div>
	</section>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
	<script>
		// Smooth scroll for anchor links
		document.querySelectorAll('a[href^="#"]').forEach(anchor => {
			anchor.addEventListener('click', function (e) {
				e.preventDefault();
				document.querySelector(this.getAttribute('href')).scrollIntoView({
					behavior: 'smooth'
				});
			});
		});
	</script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>
	<script>
		// Initialize scene, camera, renderer
		const scene = new THREE.Scene();
		const camera = new THREE.PerspectiveCamera(75, window.innerWidth / window.innerHeight, 0.1, 1000);
		const renderer = new THREE.WebGLRenderer({ antialias: true, alpha: true });
		renderer.setSize(window.innerWidth, window.innerHeight);
		renderer.setClearColor(0x000000, 0);
		renderer.domElement.style.position = 'fixed';
		renderer.domElement.style.top = '0';
		renderer.domElement.style.left = '0';
		renderer.domElement.style.zIndex = '-1';
		renderer.domElement.style.pointerEvents = 'none';
		document.body.appendChild(renderer.domElement);

		// Materials aligned with gradient
		const nodeMaterial = new THREE.MeshStandardMaterial({
			color: 0x090979,
			emissive: 0x020024,
			metalness: 0.8,
			roughness: 0.2
		});
		const connectorMaterial = new THREE.MeshStandardMaterial({
			color: 0x00d4ff,
			emissive: 0x0482c9,
			transparent: true,
			opacity: 0.8,
			metalness: 0.9,
			roughness: 0.1
		});
		const wireframeMaterial = new THREE.MeshBasicMaterial({
			color: 0x00d4ff,
			wireframe: true,
			transparent: true,
			opacity: 0.3
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
			colors[i * 3] = Math.random() * 0.5 + 0.5;
			colors[i * 3 + 1] = Math.random() * 0.5 + 0.5;
			colors[i * 3 + 2] = 1;
		}
		particles.setAttribute('position', new THREE.BufferAttribute(positions, 3));
		particles.setAttribute('color', new THREE.BufferAttribute(colors, 3));
		const particleMaterial = new THREE.PointsMaterial({ size: 0.05, vertexColors: true, transparent: true, opacity: 0.6 });
		const particleSystem = new THREE.Points(particles, particleMaterial);
		scene.add(particleSystem);

		// Innovative geometric clusters: Mix of octahedrons, icosahedrons, and dodecahedrons for variety
		const nodes = [];
		const connectors = [];
		const clusterSize = 5; // Fewer but more complex clusters
		const nodeRadius = 0.15;
		const connectorRadius = 0.03;

		// Function to create a cluster with varying geometries
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
				// Icosahedron vertices (approximated)
				const t = (1 + Math.sqrt(5)) / 2;
				vertices = [
					new THREE.Vector3(-1, t, 0), new THREE.Vector3(1, t, 0),
					new THREE.Vector3(-1, -t, 0), new THREE.Vector3(1, -t, 0),
					new THREE.Vector3(0, -1, t), new THREE.Vector3(0, 1, t),
					new THREE.Vector3(0, -1, -t), new THREE.Vector3(0, 1, -t),
					new THREE.Vector3(t, 0, -1), new THREE.Vector3(t, 0, 1),
					new THREE.Vector3(-t, 0, -1), new THREE.Vector3(-t, 0, 1)
				];
				// Simplified edges for icosahedron
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
				// Dodecahedron vertices (simplified)
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
				// Simplified edges
				edges = [
					[0, 8], [0, 12], [0, 16], [1, 9], [1, 12], [1, 18],
					[2, 10], [2, 13], [2, 16], [3, 11], [3, 13], [3, 18],
					[4, 8], [4, 14], [4, 17], [5, 9], [5, 14], [5, 19],
					[6, 10], [6, 15], [6, 17], [7, 11], [7, 15], [7, 19],
					[8, 9], [10, 11], [12, 13], [14, 15], [16, 17], [18, 19]
				];
			}

			// Create nodes
			vertices.forEach(vertex => {
				const node = new THREE.Mesh(new THREE.SphereGeometry(nodeRadius, 16, 16), nodeMaterial);
				node.position.copy(vertex).multiplyScalar(scale);
				clusterGroup.add(node);
				nodes.push(node);
			});

			// Create connectors
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

			// Add wireframe overlay for crystalline effect
			const wireframeGeo = type === 'octahedron' ? new THREE.OctahedronGeometry(scale) :
				type === 'icosahedron' ? new THREE.IcosahedronGeometry(scale) :
					new THREE.DodecahedronGeometry(scale);
			const wireframe = new THREE.Mesh(wireframeGeo, wireframeMaterial);
			clusterGroup.add(wireframe);

			clusterGroup.position.copy(position);
			scene.add(clusterGroup);
		}

		// Create varied clusters
		createCluster('octahedron', 1, new THREE.Vector3(-6, 0, 0));
		createCluster('icosahedron', 0.8, new THREE.Vector3(-3, 1, 0));
		createCluster('dodecahedron', 0.7, new THREE.Vector3(0, 0, 0));
		createCluster('octahedron', 1.2, new THREE.Vector3(3, -1, 0));
		createCluster('icosahedron', 0.9, new THREE.Vector3(6, 0, 0));

		// Lights
		nodes.forEach((node, i) => {
			const lightColor = i % 3 === 0 ? 0x00d4ff : i % 3 === 1 ? 0x090979 : 0x0482c9;
			const light = new THREE.PointLight(lightColor, 0.7, 4);
			light.position.copy(node.position);
			scene.add(light);
		});
		const ambientLight = new THREE.AmbientLight(0x060552, 0.4);
		scene.add(ambientLight);
		const directionalLight = new THREE.DirectionalLight(0x00d4ff, 0.6);
		directionalLight.position.set(5, 5, 5);
		scene.add(directionalLight);

		// Camera
		camera.position.set(0, 3, 15);

		// Mouse interaction
		let mouseX = 0, mouseY = 0;
		document.addEventListener('mousemove', (event) => {
			mouseX = (event.clientX / window.innerWidth) * 2 - 1;
			mouseY = -(event.clientY / window.innerHeight) * 2 + 1;
		});

		// Animation loop
		function animate() {
			requestAnimationFrame(animate);
			scene.rotation.y += 0.002;
			camera.position.x += (mouseX * 3 - camera.position.x) * 0.05;
			camera.position.y += (mouseY * 3 - camera.position.y) * 0.05;
			camera.lookAt(0, 0, 0);

			// Animate particles
			const positions = particleSystem.geometry.attributes.position.array;
			for (let i = 0; i < particleCount; i++) {
				positions[i * 3 + 1] += Math.sin(Date.now() * 0.001 + i) * 0.01;
			}
			particleSystem.geometry.attributes.position.needsUpdate = true;

			connectors.forEach((conn, i) => {
				conn.material.emissiveIntensity = 0.7 + 0.3 * Math.sin(Date.now() * 0.0008 + i * 0.5);
			});
			renderer.render(scene, camera);
		}
		animate();

		// Resize
		// Inside the resize listener, add a debounce or ensure it matches window.innerWidth
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