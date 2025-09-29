import * as THREE from 'three';
import { OrbitControls } from 'three/examples/jsm/controls/OrbitControls';
import { GLTFLoader } from 'three/examples/jsm/loaders/GLTFLoader.js';
import { ColladaLoader } from 'three/examples/jsm/loaders/ColladaLoader.js' 



// Global variables for expo model interaction
let expoModel = null;
let isExpoLoaded = false;

export function initScene() {
    let scene = new THREE.Scene();
    scene.background = new THREE.Color(0xffffff); // White background
    let camera = new THREE.PerspectiveCamera(75, window.innerWidth / window.innerHeight, 0.1, 1000);
    let renderer = new THREE.WebGLRenderer({ antialias: true });
    renderer.setSize(window.innerWidth, window.innerHeight);
    renderer.shadowMap.enabled = true;
    renderer.shadowMap.type = THREE.PCFSoftShadowMap;
    
    // Append to canvas container instead of body
    const canvasContainer = document.getElementById('canvas-container');
    if (canvasContainer) {
        canvasContainer.appendChild(renderer.domElement);
    } else {
        document.body.appendChild(renderer.domElement);
    }

    let raycaster = new THREE.Raycaster();
    let mouse = new THREE.Vector2();
	const arrowHelper = new THREE.ArrowHelper(new THREE.Vector3(), new THREE.Vector3(), 5, 0xff0000);
scene.add(arrowHelper);
    // Enhanced Lighting
    let directionalLight = new THREE.DirectionalLight(0xffffff, 1.5); // Increased intensity
    directionalLight.position.set(0, 1, 1);
    scene.add(directionalLight);

    let additionalLight = new THREE.DirectionalLight(0xffffff, 1.0);
    additionalLight.position.set(10, 10, -10); // Position it to light from a different angle
    scene.add(additionalLight);

    let ambientLight = new THREE.AmbientLight(0xffffff, 0.5); // Soft white light
    scene.add(ambientLight);

    // Camera position - optimized for centered floor plan view
    camera.position.set(0, 15, 10); // Directly above the model for top-down view
    camera.lookAt(new THREE.Vector3(10, 10, 0)); // Looking at center 
    // Background and icon elements removed for clean floor plan view

    // Loaders for models
    // All furniture and decorative models removed

    // Man-sitting model removed
    // Desktop model removed
    
    // Load expo2.dae model using ColladaLoader - Store/Exhibition Plan style
    const colladaLoader = new ColladaLoader();
    colladaLoader.load('expo2.dae', function (collada) {
        expoModel = collada.scene;
        
        // Scale to fit as a floor plan/exhibition layout
        expoModel.scale.set(0.01, 0.01, 0.01); // Smaller scale for plan view
        
        // Flat rotation for plan view (top-down perspective)
        expoModel.rotation.set(-Math.PI / 2, 0, 0); // Rotate to lay flat like a plan
        
        // Calculate bounding box to center the model properly
        const box = new THREE.Box3().setFromObject(expoModel);
        const center = box.getCenter(new THREE.Vector3());
        
        // Center the model by offsetting its position
        expoModel.position.set(-center.x, -center.y, -center.z);
        
        console.log('Model center calculated:', center);
        console.log('Model positioned at:', expoModel.position);
        
        // Make the model interactive but stationary
        expoModel.traverse(function(child) {
            if (child.isMesh) {
                child.userData = { isExpoModel: true };
                // Enhance materials for better plan visibility
                if (child.material) {
                    child.material.transparent = false;
                    child.material.opacity = 1.0;
                }
            }
        });
        
        scene.add(expoModel);
        isExpoLoaded = true;
        
        // Update UI status
        if (typeof updateModelStatus !== 'undefined') {
            updateModelStatus('Амжилттай ачааллагдлаа', expoModel.children.length);
        }
        
        // Hide loading screen
        if (typeof hideLoadingScreen !== 'undefined') {
            hideLoadingScreen();
        }
        
        // Show model info
        if (typeof showModelInfo !== 'undefined') {
            showModelInfo();
        }
        
        console.log('expo2.dae floor plan loaded and centered successfully');
    }, function (progress) {
        console.log('Loading progress: ', (progress.loaded / progress.total * 100) + '%');
    }, function (error) {
        console.error('Error loading expo2.dae:', error);
    });
    
    // Event Listener for Mouse Click
    renderer.domElement.addEventListener('click', onDocumentMouseClick, false);
    
    // Keyboard controls removed - model is now stationary like a floor plan

    function onDocumentMouseClick(event) {
        event.preventDefault();

     let rect = renderer.domElement.getBoundingClientRect();
    mouse.x = ((event.clientX - rect.left) / rect.width) * 2 - 1;
    mouse.y = -((event.clientY - rect.top) / rect.height) * 2 + 1;
    console.log('Mouse coordinates:', mouse.x, mouse.y);

        raycaster.setFromCamera(mouse, camera);
        arrowHelper.setDirection(raycaster.ray.direction);
        arrowHelper.position.copy(raycaster.ray.origin);
        
        // Check intersections with all objects in scene
        const intersects = raycaster.intersectObjects(scene.children, true);
        
        console.log("Intersects count:", intersects.length);
        
        // Icon click removed
        
        // Check for expo model click
        if (isExpoLoaded && intersects.length > 0) {
            for (let intersect of intersects) {
                if (intersect.object.userData && intersect.object.userData.isExpoModel) {
                    console.log("Expo model was clicked");
                    handleExpoModelClick(intersect);
                    return;
                }
            }
        }
        
        console.log("Click did not intersect with any interactive object");
    }

    // Popup function removed

    // Handle expo model click interaction
    function handleExpoModelClick(intersect) {
        console.log("Expo model clicked at:", intersect.point);
        
        // Add visual feedback - change material color temporarily
        const originalMaterial = intersect.object.material;
        const highlightMaterial = originalMaterial.clone();
        highlightMaterial.color.setHex(0xff6600); // Orange highlight
        
        intersect.object.material = highlightMaterial;
        
        // Reset material after 1 second
        setTimeout(() => {
            intersect.object.material = originalMaterial;
        }, 1000);
        
        // Animation removed - keeping model stationary
        
        // Show information about the expo model
        showExpoInfo();
    }
    
    // Animation function removed - model stays stationary
    
    // Show information popup about expo model
    function showExpoInfo() {
        const infoModal = document.createElement('div');
        infoModal.style.position = 'fixed';
        infoModal.style.width = '400px';
        infoModal.style.height = '300px';
        infoModal.style.top = '0%';
        infoModal.style.left = '0%';
        infoModal.style.background = 'rgba(0, 0, 0, 0.8)';
        infoModal.style.color = 'white';
        infoModal.style.border = '2px solid #ff6600';
        infoModal.style.borderRadius = '10px';
        infoModal.style.padding = '20px';
        infoModal.style.zIndex = '1000';
        infoModal.style.fontFamily = 'Arial, sans-serif';
        
        infoModal.innerHTML = `
            <h2 style="color: #ff6600; margin-top: 0;">Дэлгүүрийн План</h2>
            <p>Энэ бол expo2.dae файлаас ачаалсан дэлгүүрийн 3D план юм.</p>
            <p><strong>Файлын нэр:</strong> expo2.dae</p>
            <p><strong>Формат:</strong> COLLADA (.dae)</p>
            <p><strong>Харагдац:</strong> Дэлгүүрийн зураглал</p>
            <p><strong>Төлөв:</strong> Хөдөлгөөнгүй статик план</p>
            <p>Дэлгүүрийн бүтэц, тавилга, орон зайн зохион байгуулалтыг харж болно.</p>
        `;
        
        document.body.appendChild(infoModal);
        
        // Close button
        const closeButton = document.createElement('button');
        closeButton.innerText = 'Хаах';
        closeButton.style.position = 'absolute';
        closeButton.style.top = '10px';
        closeButton.style.right = '10px';
        closeButton.style.background = '#ff6600';
        closeButton.style.color = 'white';
        closeButton.style.border = 'none';
        closeButton.style.padding = '5px 10px';
        closeButton.style.borderRadius = '5px';
        closeButton.style.cursor = 'pointer';
        closeButton.onclick = function() {
            document.body.removeChild(infoModal);
        };
        infoModal.appendChild(closeButton);
        
        // Auto close after 5 seconds
        setTimeout(() => {
            if (document.body.contains(infoModal)) {
                document.body.removeChild(infoModal);
            }
        }, 5000);
    }
    
    // Orbit Controls
    let controls = new OrbitControls(camera, renderer.domElement);
    controls.enableDamping = true;
    controls.dampingFactor = 0.05;
    
    // Control button event listeners
    document.addEventListener('DOMContentLoaded', function() {
        // Reset view button
        const resetBtn = document.getElementById('reset-view');
        if (resetBtn) {
            resetBtn.addEventListener('click', function() {
                camera.position.set(0, 25, 0);
                camera.lookAt(new THREE.Vector3(0, 0, 0));
                controls.reset();
                console.log('View reset to default position');
            });
        }
        
        // Wireframe toggle button
        let wireframeMode = false;
        const wireframeBtn = document.getElementById('toggle-wireframe');
        if (wireframeBtn) {
            wireframeBtn.addEventListener('click', function() {
                wireframeMode = !wireframeMode;
                if (expoModel) {
                    expoModel.traverse(function(child) {
                        if (child.isMesh && child.material) {
                            child.material.wireframe = wireframeMode;
                        }
                    });
                }
                wireframeBtn.textContent = wireframeMode ? '🔳 Solid' : '🔲 Wireframe';
                console.log('Wireframe mode:', wireframeMode ? 'enabled' : 'disabled');
            });
        }
        
        // Fullscreen button
        const fullscreenBtn = document.getElementById('fullscreen-btn');
        if (fullscreenBtn) {
            fullscreenBtn.addEventListener('click', function() {
                if (!document.fullscreenElement) {
                    document.documentElement.requestFullscreen();
                    fullscreenBtn.textContent = '🪟 Гарах';
                } else {
                    document.exitFullscreen();
                    fullscreenBtn.textContent = '🖥️ Бүтэн дэлгэц';
                }
            });
        }
    });

    function animate() {
        requestAnimationFrame(animate);
        controls.update();
        renderer.render(scene, camera);
        
        // Update camera position display
        updateCameraDisplay();
    }
    animate();
    
    // Update camera position in UI
    function updateCameraDisplay() {
        const posElement = document.getElementById('camera-position');
        const targetElement = document.getElementById('camera-target');
        
        if (posElement && camera) {
            posElement.textContent = `x: ${camera.position.x.toFixed(1)}, y: ${camera.position.y.toFixed(1)}, z: ${camera.position.z.toFixed(1)}`;
        }
        
        if (targetElement && controls && controls.target) {
            targetElement.textContent = `x: ${controls.target.x.toFixed(1)}, y: ${controls.target.y.toFixed(1)}, z: ${controls.target.z.toFixed(1)}`;
        }
    }
    
    // Window resize handler
    window.addEventListener('resize', function() {
        camera.aspect = window.innerWidth / window.innerHeight;
        camera.updateProjectionMatrix();
        renderer.setSize(window.innerWidth, window.innerHeight);
    });
}
