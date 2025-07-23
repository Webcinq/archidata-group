@extends('layout')
@section('content')
<style>
.blog-hero {
    min-height: 60vh;
    background: linear-gradient(135deg, 
        rgba(11, 33, 84, 0.95) 0%, 
        rgba(18, 70, 152, 0.9) 30%, 
        rgba(90, 201, 144, 0.8) 60%,
        rgba(43, 40, 45, 0.85) 100%);
    position: relative;
    display: flex;
    align-items: center;
    overflow: hidden;
}

.blog-content {
    background: linear-gradient(to bottom, 
        #0b2154 0%, 
        #1a1a2e 30%, 
        #16213e  70%, 
        #0b2154 100%);
    min-height: 100vh;
    padding: 80px 0;
}

.article-card {
    background: linear-gradient(145deg, 
        rgba(43, 40, 45, 0.95) 0%, 
        rgba(23, 34, 77, 0.9) 100%);
    border-radius: 20px;
    padding: 40px;
    margin-bottom: 40px;
    border: 1px solid rgba(90, 201, 144, 0.2);
    box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
    transition: all 0.3s ease;
}

.article-card:hover {
    transform: translateY(-5px);
    border-color: rgba(90, 201, 144, 0.4);
}

.article-image {
    width: 100%;
    object-fit: contain;
    border-radius: 15px;
    border: 2px solid rgba(90, 201, 144, 0.3);
    margin-bottom: 25px;
    transition: all 0.3s ease;
    background: rgba(255, 255, 255, 0.05);
}

.article-image:hover {
    border-color: rgba(90, 201, 144, 0.5);
}

.hashtags {
    display: flex;
    flex-wrap: wrap;
    gap: 8px;
    margin-top: 20px;
}

.hashtag {
    background: linear-gradient(145deg, #5AC990, #4facfe);
    color: #0b2154;
    padding: 5px 12px;
    border-radius: 20px;
    font-size: 0.85rem;
    font-weight: 600;
    text-decoration: none;
    transition: all 0.3s ease;
}

.hashtag:hover {
    transform: scale(1.05);
    box-shadow: 0 5px 15px rgba(90, 201, 144, 0.3);
}
</style>

<!-- Hero Section -->
<div class="blog-hero">
    <div class="container" style="margin-top: 116px;">
        <div class="hero-content">
         
            <h1 class="display-4 font-weight-bold mb-4">Blog & Ressources</h1>
            <p class="lead">Articles sur le BIM, la donnée, les jumeaux numériques - Communiqués de Presse</p>
        </div>
    </div>
</div>

<!-- Content Section -->
<div class="blog-content">
    <div class="container">
        <!-- Article 1 -->
        <div class="article-card">
            <div class="row">
                <div class="col-md-4">
                    <img src="img/article-1.png" alt="Article 1 - BIM & Data Management" class="article-image">
                </div>
                <div class="col-md-8">
                    <h2 class="section-title text-white">🚀 ARCHIDATA AFRICA : Pour une gestion intelligente et durable des bâtiments grâce au BIM & Data Management</h2>
                    
                    <p class="text-light">ARCHIDATA AFRICA révolutionne la gestion et l'exploitation des bâtiments à travers des solutions innovantes de BIM & Data management, optimisant la maintenance, la consommation énergétique et la durabilité des infrastructures.</p>
                    
                    <p class="text-light">Dans un contexte où l'exploitation des bâtiments représente une part importante des coûts totaux, notre approche digitale permet aux propriétaires, promoteurs et gestionnaires d'actifs immobiliers de tirer parti :</p>
                    
                    <ul class="text-light">
                        <li>🔹 d'une analyse prédictive des équipements (type GTB),</li>
                        <li>🔹 d'une IA dédiée à l'assistance technique,</li>
                        <li>🔹 et d'outils numériques sur-mesure pour une exploitation efficace.</li>
                    </ul>

                    <div class="benefits-section mb-4">
                        <h4 class="text-white">🎯 Nos solutions permettent de :</h4>
                        <ul class="text-light">
                            <li>✅ Anticiper les pannes via la maintenance prédictive (IoT + data)</li>
                            <li>✅ Réduire la facture énergétique en surveillant les postes énergivores</li>
                            <li>✅ Automatiser les opérations de maintenance et de gestion</li>
                            <li>✅ Décider rapidement grâce aux données en temps réel (tableaux de bord, KPIs)</li>
                        </ul>
                    </div>

                    <div class="quote-section mb-4 p-3" style="background: rgba(90, 201, 144, 0.1); border-left: 4px solid #5AC990; border-radius: 10px;">
                        <p class="text-light mb-2"><em>"La gestion des bâtiments ne s'arrête pas à leur construction. Grâce au BIM et à la data, nous aidons les entreprises et collectivités à assurer la performance et la durabilité de leurs infrastructures."</em></p>
                        <strong class="text-white">Mehdi Rasfi – PDG ARCHIDATA AFRICA</strong>
                    </div>

                    <div class="hashtags">
                        <span class="hashtag">#BIM</span>
                        <span class="hashtag">#DataManagement</span>
                        <span class="hashtag">#SmartBuilding</span>
                        <span class="hashtag">#GreenTech</span>
                        <span class="hashtag">#BTP</span>
                        <span class="hashtag">#Immobilier</span>
                        <span class="hashtag">#IoT</span>
                        <span class="hashtag">#MaintenancePrédictive</span>
                        <span class="hashtag">#Durabilité</span>
                        <span class="hashtag">#Archidata</span>
                        <span class="hashtag">#Maroc</span>
                        <span class="hashtag">#Afrique</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Article 2 -->
        <div class="article-card">
            <div class="row">
                <div class="col-md-4">
                    <img src="img/article-2.png" alt="Article 2 - Gestion de projet BTP" class="article-image">
                </div>
                <div class="col-md-8">
                    <h2 class="section-title text-white">ARCHIDATA Africa repousse les limites de la gestion de projet dans le secteur du BTP</h2>
                    
                    <p class="text-light">ARCHIDATA Africa repousse les limites de la gestion de projet dans le secteur du BTP en offrant une planification totalement digitalisée, de la conception à l'exploitation des bâtiments. Grâce aux technologies BIM & DATA Management avancées, l'entreprise permet aux professionnels du bâtiment d'optimiser chaque phase de leurs projets, réduisant ainsi les délais et minimisant les risques.</p>
                    
                    <p class="text-light">Loin des méthodes BIM traditionnelles basées sur des plans 2D/3D et des estimations approximatives, ARCHIDATA AFRICA apporte une précision inégalée en intégrant des modèles numériques intelligents et en centralisant toutes les données en un seul écosystème collaboratif.</p>

                    <div class="methodology-section mb-4">
                        <h4 class="text-white">L'approche proposée par ARCHIDATA repose sur une méthodologie axée sur :</h4>
                        <ul class="text-light">
                            <li>- Une simulation avancée du projet : chaque composant du bâtiment est modélisé avec une précision millimétrée, offrant ainsi une visualisation réaliste et détaillée.</li>
                            <li>- Une meilleure coordination des équipes : grâce à un accès centralisé aux données du projet, tous les intervenants (architectes, ingénieurs, promoteurs) travaillent en parfaite synergie.</li>
                            <li>- Une optimisation des délais et des coûts : l'anticipation des erreurs et des incohérences permet de limiter les retards et de maîtriser les budgets avec une précision accrue.</li>
                            <li>- Un suivi en temps réel du chantier : les mises à jour instantanées et les échanges fluides entre les parties prenantes facilitent la prise de décision rapide et efficace.</li>
                        </ul>
                    </div>

                    <div class="benefits-section mb-4">
                        <h4 class="text-white">Bénéfices mesurables :</h4>
                        <ul class="text-light">
                            <li>- Réduction de plus de <strong>30%</strong> des erreurs en phase de construction</li>
                            <li>- Amélioration de plus de <strong>35%</strong> de l'efficacité opérationnelle</li>
                            <li>- Augmentation de la durabilité des infrastructures</li>
                        </ul>
                    </div>

                    <div class="quote-section mb-4 p-3" style="background: rgba(79, 172, 254, 0.1); border-left: 4px solid #4facfe; border-radius: 10px;">
                        <p class="text-light mb-2"><em>"Nous sommes convaincus que l'avenir du BTP passe par une digitalisation complète des processus. Grâce au BIM & Data Management et à nos solutions intelligentes et sur mesure, nous permettons aux professionnels du bâtiment d'optimiser leur travail et de bâtir l'avenir avec plus de précision et de sérénité"</em></p>
                        <strong class="text-white">Mehdi Rasfi, PDG d'ARCHIDATA Africa</strong>
                    </div>

                    <div class="hashtags">
                        <span class="hashtag">#BIM</span>
                        <span class="hashtag">#DataManagement</span>
                        <span class="hashtag">#Construction</span>
                        <span class="hashtag">#BTP</span>
                        <span class="hashtag">#Architecture</span>
                        <span class="hashtag">#Innovation</span>
                        <span class="hashtag">#Digitalisation</span>
                        <span class="hashtag">#Efficacité</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>  
@endsection