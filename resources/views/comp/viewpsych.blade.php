<?php
    use App\Http\Controllers\PsychologistsController;
    $availl = PsychologistsController::viewpsych();
?>
<?php foreach($availl as $a){ ?>
    <?php echo $a->psych_fname." ".$a->psych_lname;?>
<div class="text-center">
  <img class="psychbookpic rounded-circle mx-auto d-block" src="{{ asset('images/pic.png') }}" alt="profile picture">
    </div>
<div class="detailscontent">

<ul class="list-group list-group-flush">
<li class="list-group-item"><h4 style="color:#01acbe;">About Me</h4><p class="details">I'm is a Licensed Psychologist with a unique skill set refined toward counseling and helping others.
     My work experience ranges from adult and adolescent outpatient services, as well as working with hospital based counseling
      services. Joh has over 5 years of experience helping clients with depression, anxiety, relationship struggles and various
       other mental health and emotional challenges. I uses a person-centered approach emphasizing the importance of the 
       therapist/client relationship, along with a cognitive behavioral approach to allow the client to explore the thought 
       patterns related to the challenging emotions and behaviors. My counseling philosophy is based on an acknowledgment of the
        individual’s background and personal beliefs. His expertise allows clients to develop their own perspective of problem 
        solving and empowers them to make the changes needed in order to accomplish their goals. Saju and his wife are blessed with 
        a young daughter and expecting another child later this year!

</p></li>
<li class="list-group-item"><h4 style="color:#01acbe;">Specialty</h4>
<ul style="color:#f58c37">
  <li class="list">Stress</li>
  <li class="list">Anxiety</li>
  <li class="list">Self esteem</li>
  <li class="list">Depression</li>
</ul>
</li>

<li class="list-group-item"><h4 style="color:#01acbe;">Licensing</h4>
<ul style="color:#f58c37;">
  <li class="list">PRC 12345</li>
</ul>
</li>


<li class="list-group-item"><h4 style="color:#01acbe;">Clinic</h4>
<ul style="color:#f58c37;">
  <li class="list">12345 Street Brgy.Somewhere Cebu City Philippines </li>
</ul>
</li>

</div>

<?php }?>