

    <section id="portfolio" class="portfolio section reveal">
        <div class="container">
            <h2 class="section-title">Portfolio Audio</h2>
            <p class="section-subtitle">Découvrez la diversité et la richesse de mon travail vocal</p>
            
            <div class="audio-categories">
                <button class="category-btn active" onclick="filterAudio('all')">Tout voir</button>
                <button class="category-btn" onclick="filterAudio('pub')">Publicité</button>
                <button class="category-btn" onclick="filterAudio('narration')">Narration</button>
                <button class="category-btn" onclick="filterAudio('documentary')">Documentaire</button>
                <button class="category-btn" onclick="filterAudio('elearning')">E-learning</button>
                <button class="category-btn" onclick="filterAudio('institutional')">Institutionnel</button>
            </div>
            
            <div class="audio-grid">
                <div class="audio-card" data-category="pub">
                    <h4>Campagne publicitaire – Gestion de Stock</h4>
                    <p>Une voix moderne pour une solution agile, pensée pour les entreprises qui veulent aller plus loin</p>
                    <div class="audio-player">
                        <button class="play-btn" aria-label="Lire l'audio" onclick="toggleAudio(this, 'Audio/FlustockX.mp3')">▶</button>
                        <div class="audio-info">
                            <div class="audio-title">FluxstocksX</div>
                            <div class="audio-duration"></div>
                        </div>
                        <audio style="display: none;">
                            <source src="Audio/FlustockX.mp3" type="audio/mpeg">
                        </audio>
                    </div>
                </div>

                <div class="audio-card" data-category="pub">
                    <h4>Campagne publicitaire – Stradicom, le boost marketing

                   </h4>
                    <p>Une voix off qui ne se contente pas d’informer. Elle connecte. Elle donne une âme, une direction, une présence</p>
                    <div class="audio-player">
                        <button class="play-btn" aria-label="Lire l'audio" onclick="toggleAudio(this, 'Audio/Stradicom.mp3')">▶</button>
                        <div class="audio-info">
                            <div class="audio-title">Stradicom</div>
                            <div class="audio-duration"></div>
                        </div>
                        <audio style="display: none;">
                            <source src="Audio/Stradicom.mp3" type="audio/mpeg">
                        </audio>
                    </div>
                </div>

                <div class="audio-card" data-category="pub">
                    <h4>Campagne publicitaire – iPhone, l’icône du design
                  </h4>
                    <p>Un message clair et percutant pour découvrir les derniers modèles, au meilleur prix, avec un service premium.</p>
                    <div class="audio-player">
                        <button class="play-btn" aria-label="Lire l'audio" onclick="toggleAudio(this, 'Audio/Fynaapple.mp3')">▶</button>
                        <div class="audio-info">
                            <div class="audio-title">Fyna Apple</div>
                            <div class="audio-duration"></div>
                        </div>
                        <audio style="display: none;">
                            <source src="Audio/Fynaapple.mp3" type="audio/mpeg">
                        </audio>
                    </div>
                </div>

                <div class="audio-card" data-category="">
                    <h4>ReinaVoixOff – La voix qui transmet la culture
                  </h4>
                    <p>Avec ReinaVoixOff, je crée des contenus vocaux enracinés, puissants et authentiques.Ma voix porte le savoir, et l'héritage culturel
               </p>
                    <div class="audio-player">
                        <button class="play-btn" aria-label="Lire l'audio" onclick="toggleAudio(this, 'Audio/Wolof.mp3')">▶</button>
                        <div class="audio-info">
                            <div class="audio-title">Wolof</div>
                            <div class="audio-duration"></div>
                        </div>
                        <audio style="display: none;">
                            <source src="Audio/Wolof.mp3" type="audio/mpeg">
                        </audio>
                    </div>
                </div>

                <div class="audio-card" data-category="institutional">
                    <h4>Workshop Design - Bibocom</h4>
                    <p>Voix posée et engageante pour présentation de méthodologie design
Clarté, rigueur et impact au service de vos projets</p>
                    <div class="audio-player">
                        <button class="play-btn" aria-label="Lire l'audio" onclick="toggleAudio(this, 'Audio/Bibocom.mp3')">▶</button>
                        <div class="audio-info">
                            <div class="audio-title">Bibocom</div>
                            <div class="audio-duration"></div>
                        </div>
                        <audio style="display: none;">
                            <source src="Audio/Bibocom.mp3" type="audio/mpeg">
                        </audio>
                    </div>
                </div>

                <div class="audio-card" data-category="pub">
                    <h4>Campagne publicitaire - Thé Moringa/Nébéday</h4>
                    <p>Une interprétation vive et chaleureuse, portée par une diction claire et un rythme enjoué. La voix capte l’attention dès les premières secondes</p>
                    <div class="audio-player">
                        <button class="play-btn" aria-label="Lire l'audio" onclick="toggleAudio(this, 'Audio/TeaGarden.mp3')">▶</button>
                        <div class="audio-info">
                            <div class="audio-title">TeaGarden</div>
                            <div class="audio-duration"></div>
                        </div>
                        <audio style="display: none;">
                            <source src="Audio/TeaGarden.mp3" type="audio/mpeg">
                        </audio>
                    </div>  
                </div>
            </div>
        </div>





































        
    </section>

    <script>
    // Charger automatiquement les durées au chargement de la page
    document.addEventListener('DOMContentLoaded', function() {
        const audioCards = document.querySelectorAll('.audio-card');
        
        audioCards.forEach(card => {
            const audioElement = card.querySelector('audio');
            const durationElement = card.querySelector('.audio-duration');
            
            audioElement.addEventListener('loadedmetadata', function() {
                const minutes = Math.floor(audioElement.duration / 60);
                const seconds = Math.floor(audioElement.duration % 60);
                durationElement.textContent = `${minutes}:${seconds.toString().padStart(2, '0')}`;
            });
            
            // Forcer le chargement des métadonnées
            audioElement.load();
        });
    });

    function filterAudio(category) {
        const cards = document.querySelectorAll('.audio-card');
        const buttons = document.querySelectorAll('.category-btn');
        
        buttons.forEach(btn => btn.classList.remove('active'));
        event.target.classList.add('active');
        
        cards.forEach(card => {
            if (category === 'all' || card.dataset.category === category) {
                card.style.display = 'block';
            } else {
                card.style.display = 'none';
            }
        });
    }

    function toggleAudio(button, audioSrc) {
        const audioElement = button.parentElement.querySelector('audio');
        
        // Arrêter tous les autres audios
        document.querySelectorAll('audio').forEach(audio => {
            if (audio !== audioElement) {
                audio.pause();
                audio.currentTime = 0;
            }
        });
        
        // Réinitialiser tous les boutons
        document.querySelectorAll('.play-btn').forEach(btn => {
            if (btn !== button) {
                btn.textContent = '▶';
            }
        });
        
        if (audioElement.paused) {
            audioElement.play();
            button.textContent = '⏸';
        } else {
            audioElement.pause();
            button.textContent = '▶';
        }
        
        audioElement.addEventListener('ended', function() {
            button.textContent = '▶';
        });
    }
    </script>
