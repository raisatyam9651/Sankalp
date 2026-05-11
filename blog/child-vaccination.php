<?php
$blog_title = "Everything About Child Vaccination Schedule";
$blog_desc = "Complete guide for parents on immunization schedules, importance of vaccines, and common concerns.";
$blog_category = "Child Care";
$blog_date = "December 28, 2023";
$blog_readtime = "8 min read";
$blog_author = "Dr. Ankit Gupta";
$blog_author_desc = "MBBS, DCH - Pediatrician, Sankalp Hospital";
$blog_image = "/assets/img/blog/child-vaccination.png";
$blog_content = <<<'HTML'
<p class="lead">Vaccinations are one of the most important ways to protect your child from serious diseases. Understanding the immunization schedule helps ensure your little one receives timely protection.</p>

<blockquote>"Vaccines are a gift of modern medicine that protect children from diseases that once caused widespread illness, disability, and death. Following the recommended schedule gives your child the best protection."</blockquote>

<h2>Why Vaccination Matters</h2>
<ul>
<li><strong>Disease Prevention:</strong> Vaccines protect against 14 serious diseases including measles, polio, and whooping cough</li>
<li><strong>Community Immunity:</strong> When most people are vaccinated, it protects those who cannot be vaccinated</li>
<li><strong>Prevents Complications:</strong> Diseases like measles can lead to pneumonia, brain damage, and death</li>
<li><strong>Safe & Effective:</strong> Vaccines undergo rigorous testing and monitoring for safety</li>
</ul>

<h2>Standard Vaccination Schedule</h2>
<table class="table">
<thead>
<tr><th>Age</th><th>Vaccines</th><th>Protection Against</th></tr>
</thead>
<tbody>
<tr><td><strong>Birth</strong></td><td>BCG, HepB (1st dose)</td><td>Tuberculosis, Hepatitis B</td></tr>
<tr><td><strong>6 Weeks</strong></td><td>OPV, Pentavalent, Rotavirus, PCV</td><td>Polio, Diphtheria, Whooping Cough, Rotavirus, Pneumonia</td></tr>
<tr><td><strong>10 Weeks</strong></td><td>OPV, Pentavalent, Rotavirus, PCV</td><td>Second dose boosters</td></tr>
<tr><td><strong>14 Weeks</strong></td><td>OPV, Pentavalent, Rotavirus, PCV</td><td>Third dose boosters</td></tr>
<tr><td><strong>6 Months</strong></td><td>HepB, Flu Vaccine</td><td>Hepatitis B, Influenza</td></tr>
<tr><td><strong>9 Months</strong></td><td>MR (1st dose)</td><td>Measles, Rubella</td></tr>
<tr><td><strong>12 Months</strong></td><td>Vitamin A, Japanese Encephalitis</td><td>Vitamin A deficiency, Japanese Encephalitis</td></tr>
<tr><td><strong>15 Months</strong></td><td>MMR (2nd dose), Varicella</td><td>Measles, Mumps, Rubella, Chickenpox</td></tr>
<tr><td><strong>16-18 Months</strong></td><td>DPT, Polio Booster</td><td>Booster doses</td></tr>
<tr><td><strong>18 Months</strong></td><td>HepA</td><td>Hepatitis A</td></tr>
<tr><td><strong>5 Years</strong></td><td>DPT, MMR, Polio Booster</td><td>School entry boosters</td></tr>
</tbody>
</table>

<h2>Common Side Effects</h2>
<p>Most side effects are mild and temporary:</p>
<ul>
<li><strong>Redness/Swelling:</strong> At injection site - apply cool compress</li>
<li><strong>Fever:</strong> Low-grade fever is normal - give appropriate fever medicine</li>
<li><strong>Fussiness:</strong> Temporary irritability is common</li>
<li><strong>Drowsiness:</strong> Some children become sleepy after vaccines</li>
</ul>

<div class="alert alert-warning">
<strong>When to Call the Doctor:</strong> High fever (over 104°F), prolonged crying for more than 3 hours, seizure, or signs of allergic reaction (difficulty breathing, swelling of face/throat).
</div>

<h2>Addressing Common Concerns</h2>
<h3>Do vaccines cause autism?</h3>
<p><strong>No.</strong> Extensive research involving millions of children has found no link between vaccines and autism. The original study that suggested this link was found to be fraudulent and has been retracted.</p>

<h3>Are vaccines safe for premature babies?</h3>
<p>Yes. Premature babies should receive vaccines according to their chronological age, not adjusted age. The benefits of vaccination outweigh any risks.</p>

<h3>What if my child misses a vaccine?</h3>
<p>Your child can still catch up. Consult your pediatrician for a modified schedule that ensures complete protection.</p>

<h2>Vaccines During Illness</h2>
<p>Minor illnesses like cold, cough, or low-grade fever do not prevent vaccination. However, if your child has a moderate to severe illness, your doctor may recommend waiting.</p>

<h2>Tips for a Smoother Vaccination</h2>
<ul>
<li>Bring your child's vaccination record</li>
<li>Dress your child in comfortable, easily removable clothes</li>
<li>Bring a favorite toy or blanket for comfort</li>
<li>Stay calm - children sense parental anxiety</li>
<li>Breastfeed or offer a pacifier after vaccination</li>
<li>Give pain relief only if recommended by your doctor</li>
</ul>

<p>Keeping your child up-to-date with vaccinations is one of the best ways to protect their health. Visit Sankalp Hospital's pediatric department for comprehensive child healthcare and vaccination services.</p>
HTML;

$related_posts = [
    ['title' => 'Essential Tips for a Healthy Pregnancy', 'url' => 'pregnancy-tips.php', 'date' => 'Jan 15, 2024'],
    ['title' => 'Managing Joint Pain', 'url' => 'joint-pain.php', 'date' => 'Dec 20, 2023'],
    ['title' => 'Understanding Common Health Checkups', 'url' => 'health-checkups.php', 'date' => 'Dec 10, 2023']
];

include 'blog-post.php';
?>