<?php
$pageTitle = "Levi Batkin - Electronic Music Producer & DJ";
$pageDescription = "Levi Batkin - British electronic music producer, DJ, and recording artist. Explore his house music productions and achievements.";

// Featured tracks data
$featuredTracks = [
    [
        'title' => 'Break Down',
        'description' => 'High-energy house track with infectious basslines and pulsating beats',
        'icon' => '🎵'
    ],
    [
        'title' => 'Lift Me Up',
        'description' => 'Uplifting production featuring sparkling synths and soulful melodies',
        'icon' => '🎵'
    ],
    [
        'title' => 'Worry \'Bout',
        'description' => 'Electrifying blend of house and UK garage elements',
        'icon' => '🎵'
    ],
    [
        'title' => 'Deep Feelings',
        'description' => 'Deep house vibes with emotional resonance and dynamic energy',
        'icon' => '🎵'
    ]
];

// Connect links data
$connectLinks = [
    [
        'url' => 'https://levibatkin.com',
        'icon' => '🌐',
        'title' => 'Official Website',
        'description' => 'Visit levibatkin.com'
    ],
    [
        'url' => 'https://www.beatstars.com',
        'icon' => '🎹',
        'title' => 'BeatStars',
        'description' => 'Discover beats & productions'
    ],
    [
        'url' => 'https://www.beatport.com',
        'icon' => '🎧',
        'title' => 'Beatport',
        'description' => 'Stream on Beatport'
    ],
    [
        'url' => 'https://music.apple.com',
        'icon' => '🍎',
        'title' => 'Apple Music',
        'description' => 'Listen on Apple Music'
    ],
    [
        'url' => 'https://labelradar.com',
        'icon' => '📡',
        'title' => 'LabelRadar',
        'description' => 'Explore on LabelRadar'
    ]
];

include 'header.php';
?>

    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <div class="hero-content">
                <h2 class="hero-title">Electronic Music Producer & DJ</h2>
                <p class="hero-subtitle">Innovative house music with electrifying beats, sparkling synths, and infectious basslines</p>
                <a href="#music" class="cta-button">Explore Music</a>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="about-section">
        <div class="container">
            <h2 class="section-title">About Levi</h2>
            <div class="about-content">
                <div class="about-text">
                    <p class="intro">
                        Levi Batkin is a young British electronic music producer, DJ, and recording artist, born on December 18, 2004. 
                        He is known for his innovative contributions to the house music scene, with an eclectic blend of electronic dance, 
                        pop, hip-hop, and UK garage.
                    </p>
                    <p>
                        Drawing inspirations from artists like <strong>Calvin Harris</strong>, <strong>Diplo</strong>, and 
                        <strong>The Chainsmokers</strong>, his music features soulful, electrifying pulsating beats, sparkling synths, 
                        and infectious basslines.
                    </p>
                    <p>
                        Levi is celebrated for his dynamic live performances where he blends his productions seamlessly with house classics. 
                        Beyond music, Levi is pursuing studies and has an additional background in game development, complementing his 
                        broad creative interests.
                    </p>
                </div>
                <div class="about-highlights">
                    <h3>Achievements</h3>
                    <ul class="highlights-list">
                        <li>Innovative contributions to the house music scene</li>
                        <li>Dynamic live DJ performances blending original productions</li>
                        <li>Eclectic fusion of electronic dance, pop, hip-hop, and UK garage</li>
                        <li>Background in game development and creative technology</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Music Portfolio Section -->
    <section id="music" class="music-section">
        <div class="container">
            <h2 class="section-title">Music Portfolio</h2>
            <p class="section-subtitle">Notable tracks celebrated for their high energy on dance floors</p>
            <div class="tracks-grid">
                <?php foreach ($featuredTracks as $track): ?>
                <div class="track-card">
                    <div class="track-icon"><?php echo $track['icon']; ?></div>
                    <h3 class="track-title"><?php echo htmlspecialchars($track['title']); ?></h3>
                    <p class="track-description"><?php echo htmlspecialchars($track['description']); ?></p>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Links Section -->
    <section id="links" class="links-section">
        <div class="container">
            <h2 class="section-title">Connect & Listen</h2>
            <p class="section-subtitle">Find Levi's music and stay connected across platforms</p>
            <div class="links-grid">
                <?php foreach ($connectLinks as $link): ?>
                <a href="<?php echo htmlspecialchars($link['url']); ?>" target="_blank" rel="noopener noreferrer" class="link-card">
                    <div class="link-icon"><?php echo $link['icon']; ?></div>
                    <h3><?php echo htmlspecialchars($link['title']); ?></h3>
                    <p><?php echo htmlspecialchars($link['description']); ?></p>
                </a>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

<?php include 'footer.php'; ?>
