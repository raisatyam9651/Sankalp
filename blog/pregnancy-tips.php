<?php
$blog_title = "Essential Tips for a Healthy Pregnancy";
$blog_desc = "Learn about nutrition, exercise, and prenatal care that ensures a healthy journey for both mother and baby.";
$blog_category = "Pregnancy Care";
$blog_date = "January 15, 2024";
$blog_readtime = "6 min read";
$blog_author = "Dr. Lata Goyal";
$blog_author_desc = "MBBS, DGO - Senior Gynecologist, Sankalp Hospital";
$blog_image = "/assets/img/blog/pregnancy-care.png";
$blog_content = <<<'HTML'
<p class="lead">A healthy pregnancy begins with informed choices. From the moment you discover you're expecting, every decision you make contributes to your baby's development and your own well-being.</p>

<blockquote>"Taking care of yourself is the first step toward taking care of your baby. Every nutritious meal, every gentle walk, every moment of peace contributes to a healthier pregnancy."</blockquote>

<h2>Nutrition During Pregnancy</h2>
<p>Your body needs extra nutrients during pregnancy to support your growing baby. Focus on:</p>
<ul>
<li><strong>Folic Acid:</strong> Start taking 400-800 mcg daily before conception and continue through the first trimester to prevent neural tube defects.</li>
<li><strong>Iron:</strong> Pregnancy increases iron needs significantly. Include lean meats, spinach, and iron-fortified cereals in your diet.</li>
<li><strong>Calcium:</strong> Essential for your baby's bone development. Dairy products, fortified plant milks, and leafy greens are excellent sources.</li>
<li><strong>Protein:</strong> Supports rapid growth. Include eggs, fish, legumes, and lean meats.</li>
<li><strong>Omega-3 Fatty Acids:</strong> Important for brain development. Salmon, walnuts, and chia seeds are great options.</li>
</ul>

<h2>Safe Exercise During Pregnancy</h2>
<p>Unless your doctor advises otherwise, moderate exercise is beneficial during pregnancy:</p>
<ul>
<li><strong>Walking:</strong> 30 minutes daily improves circulation and mood</li>
<li><strong>Swimming:</strong> Low-impact and excellent for joint comfort</li>
<li><strong>Prenatal Yoga:</strong> Improves flexibility and reduces stress</li>
<li><strong>Light Stretching:</strong> Helps with muscle tension and posture</li>
</ul>

<h2>Prenatal Care Schedule</h2>
<p>Regular check-ups are crucial for monitoring your health and your baby's development:</p>
<table class="table">
<thead>
<tr><th>Trimester</th><th>Visits</th><th>Key Tests</th></tr>
</thead>
<tbody>
<tr><td><strong>First</strong></td><td>Monthly</td><td>Blood tests, urine analysis, first ultrasound</td></tr>
<tr><td><strong>Second</strong></td><td>Monthly</td><td>Glucose screening, anatomy scan</td></tr>
<tr><td><strong>Third</strong></td><td>Bi-weekly/Weekly</td><td>Group B strep test, fetal monitoring</td></tr>
</tbody>
</table>

<h2>Warning Signs to Watch For</h2>
<div class="alert alert-warning">
<strong>Contact your doctor immediately if you experience:</strong>
<ul style="margin-bottom:0">
<li>Vaginal bleeding or unusual discharge</li>
<li>Severe headaches or vision changes</li>
<li>Persistent abdominal pain</li>
<li>Sudden swelling of hands or face</li>
<li>Reduced fetal movement after 28 weeks</li>
</ul>
</div>

<h2>Getting Enough Rest</h2>
<p>Sleep becomes even more important during pregnancy. Aim for 7-9 hours per night. Use pillows to support your growing belly and sleep on your left side for optimal blood flow to your baby.</p>

<h2>Key Takeaways</h2>
<ul>
<li>Eat a balanced, nutrient-rich diet</li>
<li>Stay active with pregnancy-safe exercises</li>
<li>Attend all prenatal appointments</li>
<li>Stay hydrated and get enough rest</li>
<li>Avoid alcohol, smoking, and limit caffeine</li>
<li>Manage stress through relaxation techniques</li>
</ul>

<p>Every pregnancy is unique. Always consult with your healthcare provider for personalized guidance tailored to your specific needs and medical history.</p>
HTML;

$related_posts = [
    ['title' => 'Understanding Common Health Checkups', 'url' => 'health-checkups.php', 'date' => 'Dec 10, 2023'],
    ['title' => 'Healthy Eating Habits for the Whole Family', 'url' => 'healthy-eating.php', 'date' => 'Dec 5, 2023'],
    ['title' => 'Managing Joint Pain During Pregnancy', 'url' => 'joint-pain-pregnancy.php', 'date' => 'Nov 28, 2023']
];

include 'blog-post.php';
?>