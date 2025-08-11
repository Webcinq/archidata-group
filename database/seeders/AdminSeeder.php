<?php
// database/seeders/AdminSeeder.php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Article;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Créer l'utilisateur admin principal
        $admin = User::firstOrCreate(
            ['email' => 'admin@archidata-groupe.com'],
            [
                'name' => 'Admin ArchiData',
                'password' => Hash::make('Admin@2024!'),
                'role' => 'admin',
                'actif' => true,
                'email_verified_at' => now(),
            ]
        );

        echo "✅ Admin créé: {$admin->email} / Mot de passe: Admin@2024!\n";

        // Créer quelques articles d'exemple
        $articles = [
            [
                'titre' => 'ARCHIDATA AFRICA : Pour une gestion intelligente et durable des bâtiments grâce au BIM & Data Management',
                'description_courte' => 'ARCHIDATA AFRICA révolutionne la gestion et l\'exploitation des bâtiments à travers des solutions innovantes de BIM & Data management.',
                'contenu' => '<p>ARCHIDATA AFRICA révolutionne la gestion et l\'exploitation des bâtiments à travers des solutions innovantes de BIM & Data management, optimisant la maintenance, la consommation énergétique et la durabilité des infrastructures.</p>

<p>Dans un contexte où l\'exploitation des bâtiments représente une part importante des coûts totaux, notre approche digitale permet aux propriétaires, promoteurs et gestionnaires d\'actifs immobiliers de tirer parti :</p>

<ul>
<li>🔹 d\'une analyse prédictive des équipements (type GTB),</li>
<li>🔹 d\'une IA dédiée à l\'assistance technique,</li>
<li>🔹 et d\'outils numériques sur-mesure pour une exploitation efficace.</li>
</ul>

<h4>🎯 Nos solutions permettent de :</h4>
<ul>
<li>✅ Anticiper les pannes via la maintenance prédictive (IoT + data)</li>
<li>✅ Réduire la facture énergétique en surveillant les postes énergivores</li>
<li>✅ Automatiser les opérations de maintenance et de gestion</li>
<li>✅ Décider rapidement grâce aux données en temps réel (tableaux de bord, KPIs)</li>
</ul>

<blockquote>
<p><em>"La gestion des bâtiments ne s\'arrête pas à leur construction. Grâce au BIM et à la data, nous aidons les entreprises et collectivités à assurer la performance et la durabilité de leurs infrastructures."</em></p>
<p><strong>Mehdi Rasfi – PDG ARCHIDATA AFRICA</strong></p>
</blockquote>',
                'secteur_activite' => 'commercial',
                'hashtags' => ['BIM', 'DataManagement', 'SmartBuilding', 'GreenTech', 'BTP', 'Immobilier', 'IoT', 'MaintenancePrédictive', 'Durabilité', 'Archidata', 'Maroc', 'Afrique'],
                'image' => 'articles/article-1.png',
                'featured' => true,
                'meta_description' => 'Solutions BIM et Data Management pour une gestion intelligente des bâtiments par ARCHIDATA AFRICA',
                'meta_keywords' => 'BIM, Data Management, Smart Building, maintenance prédictive'
            ],
            [
                'titre' => 'ARCHIDATA Africa repousse les limites de la gestion de projet dans le secteur du BTP',
                'description_courte' => 'ARCHIDATA Africa offre une planification totalement digitalisée, de la conception à l\'exploitation des bâtiments.',
                'contenu' => '<p>ARCHIDATA Africa repousse les limites de la gestion de projet dans le secteur du BTP en offrant une planification totalement digitalisée, de la conception à l\'exploitation des bâtiments. Grâce aux technologies BIM & DATA Management avancées, l\'entreprise permet aux professionnels du bâtiment d\'optimiser chaque phase de leurs projets, réduisant ainsi les délais et minimisant les risques.</p>

<p>Loin des méthodes BIM traditionnelles basées sur des plans 2D/3D et des estimations approximatives, ARCHIDATA AFRICA apporte une précision inégalée en intégrant des modèles numériques intelligents et en centralisant toutes les données en un seul écosystème collaboratif.</p>

<h4>L\'approche proposée par ARCHIDATA repose sur une méthodologie axée sur :</h4>
<ul>
<li>- Une simulation avancée du projet : chaque composant du bâtiment est modélisé avec une précision millimétrée, offrant ainsi une visualisation réaliste et détaillée.</li>
<li>- Une meilleure coordination des équipes : grâce à un accès centralisé aux données du projet, tous les intervenants (architectes, ingénieurs, promoteurs) travaillent en parfaite synergie.</li>
<li>- Une optimisation des délais et des coûts : l\'anticipation des erreurs et des incohérences permet de limiter les retards et de maîtriser les budgets avec une précision accrue.</li>
<li>- Un suivi en temps réel du chantier : les mises à jour instantanées et les échanges fluides entre les parties prenantes facilitent la prise de décision rapide et efficace.</li>
</ul>

<h4>Bénéfices mesurables :</h4>
<ul>
<li>- Réduction de plus de <strong>30%</strong> des erreurs en phase de construction</li>
<li>- Amélioration de plus de <strong>35%</strong> de l\'efficacité opérationnelle</li>
<li>- Augmentation de la durabilité des infrastructures</li>
</ul>

<blockquote>
<p><em>"Nous sommes convaincus que l\'avenir du BTP passe par une digitalisation complète des processus. Grâce au BIM & Data Management et à nos solutions intelligentes et sur mesure, nous permettons aux professionnels du bâtiment d\'optimiser leur travail et de bâtir l\'avenir avec plus de précision et de sérénité"</em></p>
<p><strong>Mehdi Rasfi, PDG d\'ARCHIDATA Africa</strong></p>
</blockquote>',
                'secteur_activite' => 'industriel',
                'hashtags' => ['BIM', 'DataManagement', 'Construction', 'BTP', 'Architecture', 'Innovation', 'Digitalisation', 'Efficacité'],
                'image' => 'articles/article-2.png',
                'featured' => true,
                'meta_description' => 'Gestion de projet BTP digitalisée avec ARCHIDATA Africa - Technologies BIM avancées',
                'meta_keywords' => 'BIM, gestion projet, BTP, construction, digitalisation'
            ]
        ];

        foreach ($articles as $articleData) {
            Article::firstOrCreate(
                ['titre' => $articleData['titre']],
                array_merge($articleData, [
                    'user_id' => $admin->id,
                    'actif' => true,
                    'date_publication' => Carbon::now()->subDays(rand(1, 30)),
                ])
            );
        }

        echo "✅ Articles d'exemple créés!\n";
    }
}   
