<x-layout>
    <section id="about" class="about-section">
        <div class="img-container">
          <img src="/img/header2.png" alt="Immagine di Nicola Bongiovanni">
        </div>
        <div class="text-container">
          <p class="typing-effect"></p>
        </div>
      </section>
      <div class="container-fluid">
        <div class="card-wrapper">
          <div class="card">
            <div class="card-image">
              <img src="/img/nico.png" alt="profile one">
              <div class="details">
                <h2>Nicola Bongiovanni</h2>
                <p class="job-title">Web Developer</p>
              </div>
            </div>
        </div>
        <div class="skills-panel">
            <h3 class="skills-header text-center">COMPETENZE:</h3>
            <div class="skills-columns my-5">
              <div class="skills-category">
                <h4>Linguaggi</h4>
                <ul class="skills">
                  <li><i class="fab fa-html5" style="color: #E34F26;"></i> HTML</li>
                  <li><i class="fab fa-css3-alt" style="color: #1572B6;"></i> CSS</li>
                  <li><i class="fab fa-js-square" style="color: #F7DF1E;"></i> JavaScript</li>
                  <li><i class="fab fa-php" style="color: #777BB4;"></i> PHP</li>
                  <li><i class="fab fa-python" style="color: #306998;"></i> Python</li>
                </ul>
              </div>
              <div class="skills-category">
                <h4>Framework</h4>
                <ul class="skills">
                  <li><i class="fab fa-laravel" style="color: #FF2D20;"></i> Laravel</li>
                  <li><i class="simple-icons--livewire" style="color: #4a5568;"></i> Livewire</li>
                  <li><i class="fab fa-bootstrap" style="color: #563D7C;"></i> Bootstrap</li>
                  <li><i class="fab fa-node-js" style="color: #339933;"></i> Node.js</li>
                  <li><i class="fab fa-react" style="color: #61DAFB;"></i> React</li>
                </ul>
              </div>
              <div class="skills-category">
                <h4>Database</h4>
                <ul class="skills">
                  <li><i class="fas fa-database" style="color: #4479A1;"></i> MySQL</li>
                </ul>
              </div>
              <div class="skills-category">
                <h4>Altri Strumenti</h4>
                <ul class="skills">
                  <li><i class="fab fa-github" style="color: #181717;"></i> GitHub</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      {{-- SEZIONE PROGETTI --}}
      <section id="projects" class="projects-section">
        <h2 class="section-title">I miei progetti</h2>
        <div class="github-container align-item-center">
            <button id="toggle-button" class="github-button" onclick="toggleProjects()">
                <span id="button-text">Scopri i miei progetti su GitHub</span>
                <span id="loading-spinner" class="loading-spinner" style="display: none;"></span>
            </button>
        </div>
        <div id="projects-grid" class="projects-grid" style="display: none;">
            <!-- I progetti saranno inseriti qui da JavaScript -->
        </div>
    </section>
      {{-- FINE SEZIONE PROGETTI --}}
      {{-- INIZIO CONTATTI --}}
      <section id="contact" class="contact-section">
        <h2>Dove trovarmi</h2>
        <p>Se vuoi collaborare con me, discutere di nuove idee o semplicemente metterti in contatto, puoi trovarmi sui seguenti social media. Sono sempre aperto a nuove opportunità e conversazioni interessanti!</p>
        <div class="social-icons">
            <a href="https://www.facebook.com/nicola.bongiovanni.35/" target="_blank" class="social-link facebook" data-tooltip="Seguimi su Facebook">
                <i class="fab fa-facebook fa-2x"></i> Facebook
            </a>
            <a href="https://www.instagram.com/nikolaosbongio97?igsh=cGp0OXd6NTNyaXd5&utm_source=qr" target="_blank" class="social-link instagram" data-tooltip="Seguimi su Instagram">
                <i class="fab fa-instagram fa-2x"></i> Instagram
            </a>
            <a href="https://wa.me/3278308941" target="_blank" class="social-link whatsapp" data-tooltip="Chatta con me su WhatsApp">
                <i class="fab fa-whatsapp fa-2x"></i> WhatsApp
            </a>
            <a href="https://www.linkedin.com/in/nicola-bongiovanni-b69a9327a/" target="_blank" class="social-link linkedin" data-tooltip="Connettiti con me su LinkedIn">
                <i class="fab fa-linkedin fa-2x"></i> LinkedIn
            </a>
        </div>
      </section>
        <section id="download-section" class="download-section">
            <div class="container-fluid text-center">
                <h2 class="font-p">Vuoi saperne di più?</h2>
                <p class="font-p">Scarica il mio curriculum e il certificato da Full Stack Developer per conoscere meglio le mie competenze e la mia esperienza.</p>
                <div class="download-buttons">
                    <button class="btn-download" id="download-cv">
                        Scarica il Curriculum
                    </button>
                    <button class="btn-download" id="download-certificate">
                        Scarica il Certificato
                    </button>
                </div>
                <div id="rocket" class="rocket">
                    🚀
                </div>
            </div>
        </section>
       {{-- FINE VUOI SAPERNE DI PIù --}}

</x-layout>