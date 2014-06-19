<?php $pageTitle='Allergy List'; ?>
<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<title>Inspired EHRs | <?php echo $pageTitle; ?></title>
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<link rel="stylesheet" type="text/css" href="./assets/css/layout.css">
	<link rel="stylesheet" type="text/css" href="./assets/css/Slider/component.css" />
	<link rel="stylesheet" type="text/css" href="./assets/css/jquery.fancybox.css?v=2.1.5" media="screen" />

	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>
<body class="allergy-list">
	<?php include './nav.php'; ?>
	
<div class="wrapper">
	<?php include './header.php'; ?>
		
	<section id="ch-4" class="chapter">
		<header class="chapterStart">
			<div class="container">
				<div class="sixteen columns">
					<h2>4</h2>
					<h2>Allergy List</h2>
				</div>
			</div>
		</header>
		<section id="allergy-list" class="section">
			<div class="container">
				<div class="sixteen columns">
					<div class="sectionStart">
						<hr/>
					</div>
					<p>A Medication Allergy List includes the known medication allergies for a patient, but might include more. It is often referred to more concisely as “Allergy List,” and we adopt that strategy here.</p>
					<p>For this chapter, we will focus on true drug allergies and drug adverse effects. Historically, physicians, nurses, patients, and pharmacists have included true drug allergies, other adverse effects (such as nausea or sedation), and allergic reactions. Allergies to substances that are not medications (latex, adhesive tape, peanuts and other foods) may be commonly included in Allergy Lists. Inhalant allergies (hay fever, allergies to dust and mold, and asthma) are usually not included in the Allergy List, but in the Problem List instead.</p>
					<p>In one way the Allergy List is the safety net that supports the Medication List. The medication list is checked against this list of allergies for drug-allergies in order to ensure safety. The consequences of an unprevented allergic reaction can range from minor to fatal, so the Allergy List needs to be updated as new allergies are discovered to keep any allergies from being missed. Correcting errors in the Allergy List can be made easy and intuitive with good design.</p>
				</div>
			</div>
		</section>
		
		<section id="big-three" class="section">
			<div class="container">
				<div class="sixteen columns">
					<div class="sectionStart">
						<hr/>
						<h3>The Big Three</h3>
					</div>
					<p>There are three main user tasks to consider when developing a medication allergy list: glancing at the list, exploring the details, and changing the list.</p>
					<h5>Glancing at the list</h5>
						<p>Oftentimes a nurse or doctor needs to quickly refer to the allergy list, ideally with every new prescription or administration of a medication. A brief glance at the list may reveal “no known medication allergies” or the name of a medication about to be ordered for the patient. A short list of only the drug names could suffice, always visible at the right time in the open chart, such as in the patient banner.</p>
					<h5>Exploring the details</h5>
						<p>Sometimes, a clinician needs to know more details about a purported medication allergy in order to make a clinical decision whether to order the drug anyway. How severe was the allergy? What were the symptoms? How certain are we of the facts?  In this instance, a more detailed table view of the Allergy List is appropriate.</p>
					<h5>Changing the list (Adding and editing)</h5>
						<p>It should be quick and straightforward to add a new entry to the list. Make it effortless to say “No known medication allergies” with a click or two. Don’t require unnecessary detail beyond the name of the substance/drug. Let it be optional to add the reaction details (symptoms, date, severity) because sometimes people don’t know or remember the details. It is important to capture the identity of the user making the edits.</p>
					<p>Now let’s do some design makeovers and get into some real world scenarios.</p>
				</div>
			</div>
		</section>
		
		<section id="glancing-at-the-allergy-list" class="section">
			<div class="container">
				<div class="sixteen columns">
					<div class="sectionStart">
						<hr/>
						<h3>Glancing at the Allergy List</h3>
					</div>
					<div class="scenario"><h5>Clinical Scenario #1 - bladder infection</h5>
						<p>Dr. Barnes is seeing a young woman who appears to have a simple bladder infection. The antibiotic of choice would be sulfamethoxazole / trimethoprim (Bactrim). By glancing at the allergy list in the patient banner, Dr. Barnes notices that the patient is allergic to sulfa drugs (Bactrim is a sulfa drug), and chooses a suitable and equally inexpensive drug, ciprofloxin.</p>
					</div>
					<p>Here is a look at a “before and after” makeover of an allergy list. The physician’s main task is glancing at the list when prescribing a new medication, while a nurse is glancing at the list before administering a medication to the patient. In both cases, the physician or nurse would also ask the patient if they are allergic to the drug in question.</p>
					<p>The designer’s task is to make sure that the physician or nurse can find that information while engaging the task at hand, not over-burdened with unnecessary detail. This reduces cognitive load (mental effort). A <strong>bad</strong> idea is to have this information several clicks away or buried in drop-down menu found in a location that needs to be memorized. The navigation requires time and effort, and remembering where to look increases cognitive load.</p>
					<p>One easy way to assure access is to include access to the Allergy List in the patient demographic bar.</p>
					<div class="example" id="fig-4-1">
						<div class="ex-title">
							<span class="ex-type">Figure 4.1</span>
							<span class="ex-caption">Before</span>
						</div>
						<a class="fancybox" href="./assets/images/examples/allergy-list/Um_Ehr_AllergyList_0001_med-list-bad.png"><img src="./assets/images/examples/allergy-list/Um_Ehr_AllergyList_0001_med-list-bad.png" class="scale-with-grid" /></a>
					</div>
					<p>In this example using space for symptoms rather than listing more substances is less useful to the physician.</p>
					<p>The total number of items in a long list is not visible unless the user hovers with a mouse, and  with touch interfaces hover is not an option. At a glance it is good to know if there are more substances in the Allergy List.</p>
					<p>Also this list does not indicate severity.</p>
					<div class="example" id="fig-4-2">
						<div class="ex-title">
							<span class="ex-type">Figure 4.2</span>
							<span class="ex-caption">After</span>
						</div>
						<a class="fancybox" href="./assets/images/examples/allergy-list/UM_EHR_0002_med-list-better.png"><img src="./assets/images/examples/allergy-list/UM_EHR_0002_med-list-better.png" class="scale-with-grid" /></a>
					</div>
					<p>In our makeover example, more substances can be listed without the symptoms.</p>
					<p>We can draw attention to severity with bold text without taking up space or overloading the physician visually.</p>
					<p>The number with the word “more” following it is more helpful than requiring a hover. It tells the physician user that there are 2 more drug allergies not displayed in this concise view. The number without the word more could be confusing, especially at a glance when our minds will try to jump to a conclusion about what the number means (Is it a “total” of 2, or are there “2 more” to be seen?).</p>
					<p>Including the Allergy List in the patient demographic bar is not the only way to include it into the workflow. The Allergy List could be displayed only in the workflows where new medication prescription or renewals are to be done, so long as it is readily available when it comes to prescribing time. Most other workflows (reviewing lab results or vital signs or reading reports) don’t require an awareness of medication allergies.</p>
					<div class="example" id="fig-4-3">
						<div class="ex-title">
							<span class="ex-type">Figure 4.3</span>
							<span class="ex-caption">Add precription orders</span>
						</div>
						<a class="fancybox" href="./assets/images/examples/allergy-list/Um_Ehr_AllergyList_0003_add-orders.png"><img src="./assets/images/examples/allergy-list/Um_Ehr_AllergyList_0003_add-orders.png" class="scale-with-grid" /></a>
					</div>
				</div>
			</div>
		</section> <!--end section glancing-at-the-allergy-list-->
		
		<section id="exploring-the-details" class="section">
			<div class="container">
				<div class="sixteen columns">
					<div class="sectionStart">
						<hr/>
						<h3>Exploring the Details</h3>
					</div>
					<p>Sometimes the physician wants to know a bit more detail about a listed drug allergy. Is the information likely accurate? Is the potential risk of using the drug outweighed by a strong benefit (better effectiveness, lower cost, etc,)?</p>
					<div class="scenario"><h5>Clinical Scenario #2 - Strep throat and severe penicillin allergy</h5>
						<p>Dr. Barnes is seeing a 38 year old father of four with a 2 day history of an increasingly sore throat. Five days ago, one of the children had come home from school with a fever and headache. The patient’s rapid strep test indicates strep throat.</p>
						<p>Dr. Barnes would usually prescribe penicillin (cheap and effective), but the patient had a severe reaction to penicillin a few years ago (hives, swelling of the lips). The next alternative would be cephalexin (Keflex). Because penicillin and cephalexin are chemically similar, the risk of allergic cross-reaction depends on the severity of the penicillin allergy. Sometimes it is perfectly safe to prescribe cephalexin to someone with a milder penicillin allergy. However, for a severe penicillin allergy, cephalexin should be avoided. The 3rd choice alternative would be clindamycin (more doses per day and more expensive) or azithromycin (Z-Pak, which is more expensive).</p>
					</div>
					<p>With a glance at the patient banner, the physician can see some information, but more details are needed in this clinical scenario. What exactly happened with each drug? Was the reaction severe?</p>
					<!--Fig 2-2 Interactive TAble Figure-->
					<div class="example" id="fig-4-4">
						<div class="ex-title">
							<span class="ex-type">Figure 4.4</span>
							<span class="ex-caption">Patient banner shows medication names only</span>
						</div>
						<a class="fancybox" href="./assets/images/examples/allergy-list/UM_EHR_0002_med-list-better.png"><img src="./assets/images/examples/allergy-list/UM_EHR_0002_med-list-better.png" class="scale-with-grid" /></a>
					</div>
					<p>To see the additional details, the detailed table view is needed.</p>
					<div class="example" id="fig-4-5">
						<div class="ex-title">
							<span class="ex-type">Figure 4.5</span>
							<span class="ex-caption">Medication Allergy List - Table View shows details</span>
						</div>
						<a class="fancybox" href="./assets/images/examples/allergy-list/Um_Ehr_AllergyList_0000_allergies.png"><img src="./assets/images/examples/allergy-list/Um_Ehr_AllergyList_0000_allergies.png" class="scale-with-grid" /></a>
					</div>
					<p>In this list the physician or nurse can see the information they need with the most important information on the left, and increasingly less important information toward the right. This list reduces the visual load by limiting the information shown which keeps the table simple and effective. Further details can be seen by drilling a step deeper.</p>
					<div class="example" id="fig-4-6">
						<div class="ex-title">
							<span class="ex-type">Figure 4.6</span>
							<span class="ex-caption">Click or tap on an allergy to see more details and edit</span>
						</div>
						<a class="fancybox" href="./assets/images/examples/allergy-list/Um_Ehr_AllergyList_0005_allergies-details.png"><img src="./assets/images/examples/allergy-list/Um_Ehr_AllergyList_0005_allergies-details.png" class="scale-with-grid" /></a>
					</div>
					<p>By keeping the table clean and simple we are taking advantage of a human factors principle that “our eyes have expectations” so physicians can instantly make sense of it. How did we know what information was needed and what priority to put on each category? Check out our sidebar for more.</p>
					<div class="sidebar cf">
						<h5>What details are important?</h5>
						<p>Know your user and their needs. In order to inform our chapter our team collected user data mainly from practicing doctors about the relative importance of item display they wanted to see in a Medication Allergy List. Here are the results:</p>
						<div class="example" id="fig-4-7">
							<div class="ex-title">
								<span class="ex-type">Figure 4.7</span>
								<span class="ex-caption"></span>
							</div>
							<a class="fancybox" href="./assets/images/examples/allergy-list/chart.png"><img src="./assets/images/examples/allergy-list/chart.png" class="scale-with-grid" /></a>
						</div>
					</div>
					
				</div>
			</div>
		</section><!--end section exploring-the-details-->

		<section id="changing-the-allergy-list" class="section">
			<div class="container">
				<div class="sixteen columns">
					<div class="sectionStart">
						<hr/>
						<h3>Changing the Allergy List (Adding and Editing)</h3>
					</div>
					<div class="scenario"><h5>Clinical Scenario #3 - Modifying the allergy list</h5>
						<p>Dr. Barnes is seeing an adult patient who has had a sinus infection for the past two weeks. As Dr. Barnes gets ready to prescribe an antibiotic, he asks the patient about any drug allergies, while at the same time glancing at the allergy list in the Patient Banner. Today the patient reports “Z-Pak gave me hives” last winter after a visit to an urgent care center. Dr. Barnes wants to add Z-Pak to the allergy list.</p>
						<p>The patient's allergy list currently includes Augmentin (Augmentin is a combination product containing amoxicillin and clavulanic acid, and amoxicillin is in the penicillin drug family). No reactions are described for the drug allergy. Dr. Barnes decides to take advantage of this opportunity to add some detail to the medication allergy list.</p>
						<p>The patient reports having severe nausea when taking Augmentin as a child. Further discussion with the patient reveals that he has tolerated amoxicillin alone (also in the penicillin family) in subsequent years without any trouble.</p>
						<p>To correct the allergy list, Dr. Barnes modifies the Augmentin allergy from the category of "allergy" to the category of "side effect."</p>
						<p>For this diagnosis, the drug of choice would be Augmentin.</p>
					</div>
					<p>Here is the Allergy List for the patient.</p>
					<div class="example" id="fig-4-8">
						<div class="ex-title">
							<span class="ex-type">Figure 4.8</span>
							<span class="ex-caption">Click or tap on an allergy to see more details and edit</span>
						</div>
						<a class="fancybox" href="./assets/images/examples/allergy-list/Um_Ehr_AllergyList_0005_allergies-details.png"><img src="./assets/images/examples/allergy-list/Um_Ehr_AllergyList_0005_allergies-details.png" class="scale-with-grid" /></a>
					</div>
					<p>The physician or nurse’s task is to add or remove substances, sometimes quickly and often with other time demands pressing for attention. The designer’s task is to make adding and removing substances quick and intuitive. Here are some details about the physician’s task to keep in mind:</p>
						<ul class="disc">
							<li>Add a new entry to the list quickly and with little effort because this task happens often with new patients.</li>
							<li>Record “No known medication allergies” with little effort because this is often the case with younger patients. </li>
							<li>Make reaction details optional (symptoms, date, severity) because sometimes people don’t know or don’t remember the details. Adding the drug name alone can be enough to assure patient safety.</li>
							<li>Allow comments to accommodate those situations when further explanation is needed beyond the existing categories (substance, reaction, category, severity).</li>
							<li>Make it easy to correct erroneous information from previous entries. Sometimes mistakes are made, or new information makes it apparent that the allergy list needs to be modified. </li>
							<li>Make it easy to find out who made entries or edits to the Allergy List. This field can be auto-populated with the active user’s name. That let’s the user gauge the trustworthiness of the information, and whether it may be worth double-checking with the patient about the allergy. In one study of inpatient drug allergy alert override reasons, the physicians doubted the allergy data 40% of the time [Kuperman 2003]. </li>
							<li>Allow a drug allergy listing to be inactivated (removed). Otherwise, physicians will need to repeatedly override drug-allergy alerts during the act of prescribing even when no allergy or side-effect exists.</li>
						</ul>
					<p>Take a look at the presentation of these two displays for adding an allergy. Which one looks easier? Why? Is it also as safe? </p>
					<div class="example" id="gal-4-1">
						<div class="ex-title">
							<span class="ex-caption">Adding Allergies</span>
							<span class="ex-type">Gallery 4.1</span>
						</div>
						<div id="cbp-fwslider" class="scale-with-grid cbp-fwslider">
							<ul>
								<li><div>
									<a class="fancybox" data-fancybox-group="gallery-1" href="./assets/images/examples/allergy-list/Um_Ehr_AllergyClone_0000_allergy-xp.png"><img src="./assets/images/examples/allergy-list/Um_Ehr_AllergyClone_0000_allergy-xp.png" class="scale-with-grid" /></a>
									<div class="caption">Before</div>
								</div></li>
								<li><div>
									<a class="fancybox" data-fancybox-group="gallery-1" href="./assets/images/examples/allergy-list/Um_Ehr_AllergyList_0006_add-an-allergy.png">
									<img src="./assets/images/examples/allergy-list/Um_Ehr_AllergyList_0006_add-an-allergy.png" class="scale-with-grid" /></a>
									<div class="caption">After</div>
								</div></li>
							</ul>
						</div>
					</div>
					<p>The “after” example should look more straightforward, but is it equally safe? Let’s look at the design details.</p>
					<p>In the following screenshot, the highlighted areas are the only ones that are essential for the task of adding a substance to the Allergy List.</p>
					<div class="example" id="fig-4-9">
						<div class="ex-title">
							<span class="ex-type">Figure 4.9</span>
							<span class="ex-caption"></span>
						</div>
						<a class="fancybox" href="./assets/images/examples/allergy-list/Um_Ehr_AllergyClone_0001_highlighted.png"><img src="./assets/images/examples/allergy-list/Um_Ehr_AllergyClone_0001_highlighted.png" class="scale-with-grid" /></a>
					</div>
					<p>The information not highlighted is optional for the task at hand, but still has to be looked at, evaluated, and then ignored to complete the task. All the additional unnecessary information for this task is overwhelming and creates more mental work for the physician. This exemplifies "<a href="./human-factors#cognitive-load">information overload</a>."</p>
					<p>In our “after” example, only the necessary data fields are included at the top, and optional details are in the shaded section in the bottom portion. Other technical terms are simply not shown. They don’t help the physician user.</p>
					<div class="example" id="fig-4-10">
						<div class="ex-title">
							<span class="ex-type">Figure 4.10</span>
							<span class="ex-caption"></span>
						</div>
						<a class="fancybox" href="./assets/images/examples/allergy-list/Um_Ehr_AllergyList_0006_add-an-allergy.png"><img src="./assets/images/examples/allergy-list/Um_Ehr_AllergyList_0006_add-an-allergy.png" class="scale-with-grid" /></a>
					</div>
					<div class="sidebar">
						<h5>Drug Allergy Severity: How Serious is this Reaction?</h5>
						<p>There are no published standards for describing the severity of medication allergy reactions. Here is a list of reactions for classifying contrast agent allergies, which will suit for our purposes of appreciating the spectrum of allergic reaction severity.</p>
						<p><strong>Mild: </strong><br/>
							Nausea, vomiting, diaphoresis, itching, hives, rash, headache, pallor, nasal stuffiness, dizziness, chills, swelling around eyes and face, anxiety.</p>
						<p><strong>Moderate: </strong><br/>
							Tachycardia, hypotension, dyspnea, wheezing, laryngospasm, bronchospasm. </p>
						<p><strong>Severe: </strong><br />
							Anaphylaxis, convulsions, cardiopulmonary arrest.</p>
					</div>
					<p>Another reason the “after” design is an improvement has to do with a human factor principle known as the principle of least effort. What are the tasks for adding a new entry to the Allergy List?</p>
						<ol>
							<li>Find the name of the drug or substance.</li>
							<li>Describe or find the reaction symptoms.</li>
							<li>(Optional) Add any additional details needed including the type of reaction, dates, source of the information, etc</li>
						</ol>
					<p>Compare these two examples below.</p>
					<div class="example" id="gal-4-2">
						<div class="ex-title">
							<span class="ex-caption">Example 1: Sample current EHR workflow for adding new allergy.</span>
							<span class="ex-type">Gallery 4.2</span>
						</div>
						<div id="cbp-fwslider-2" class="scale-with-grid cbp-fwslider">
							<ul>
								<li><div>
									<a class="fancybox" data-fancybox-group="gallery-2" href="./assets/images/examples/allergy-list/Um_Ehr_AllergyList_0002_visual-queries-1.png"><img src="./assets/images/examples/allergy-list/Um_Ehr_AllergyList_0002_visual-queries-1.png" class="scale-with-grid" /></a>
									<div class="caption">First, find the name of the drug</div>
								</div></li>
								<li><div>
									<a class="fancybox" data-fancybox-group="gallery-2" href="./assets/images/examples/allergy-list/Um_Ehr_AllergyList_0003_visual-queries-2.png">
									<img src="./assets/images/examples/allergy-list/Um_Ehr_AllergyList_0003_visual-queries-2.png" class="scale-with-grid" /></a>
									<div class="caption">Next, add the reaction symptoms</div>
								</div></li>
							</ul>
						</div>
					</div>
					<div class="example" id="fig-4-11">
						<div class="ex-title">
							<span class="ex-type">Figure 4.11</span>
							<span class="ex-caption"></span>
						</div>
						<a class="fancybox" href="./assets/images/examples/allergy-list/Um_Ehr_AllergyList_0007_add-allergy-visual.png"><img src="./assets/images/examples/allergy-list/Um_Ehr_AllergyList_0007_add-allergy-visual.png" class="scale-with-grid" /></a>
					</div>
					<p>The simple example is easier navigate because it has a clear visual sequence in which the data fields should be completed. The optional section is visually distinct because of it’s shading. This is important because the less effort it takes to complete a task the more likely someone will complete the task. Also it is less time consuming and tiring.</p>
					<h5>Predictive Search Fields</h5>
					<p>Predictive search fields can substantially reduce the mental effort and time required to quickly add to an Allergy List. Putting the most likely results at the top makes the visual search easier. In this case, the simple reaction description “cough” is far more likely than the more detailed results such as “whooping cough,” “smoker’s cough,” etc.</p>
					<p>One example is be sure the search algorithm places the most likely substances and symptoms at the top rather than following some other sort of ordering system. This is another example of top down processing which is more useful in this case. The top being the broad symptom like a cough with the bottom being a particular type of cough.</p>
					<div class="example" id="gal-4-3">
						<div class="ex-title">
							<span class="ex-caption">Example 1: Sample current EHR workflow for adding new allergy.</span>
							<span class="ex-type">Gallery 4.3</span>
						</div>
						<div id="cbp-fwslider-3" class="scale-with-grid cbp-fwslider">
							<ul>
								<li><div>
									<a class="fancybox" data-fancybox-group="gallery-3" href="./assets/images/examples/allergy-list/Um_Ehr_AllergyClone_0000_allergy-xp.png"><img src="./assets/images/examples/allergy-list/Um_Ehr_AllergyClone_0000_allergy-xp.png" class="scale-with-grid" /></a>
									<div class="caption">Before</div>
								</div></li>
								<li><div>
									<a class="fancybox" data-fancybox-group="gallery-3" href="./assets/images/examples/allergy-list/Um_Ehr_AllergyList_0008_add-allergy-after.png">
									<img src="./assets/images/examples/allergy-list/Um_Ehr_AllergyList_0008_add-allergy-after.png" class="scale-with-grid" /></a>
									<div class="caption">After</div>
								</div></li>
							</ul>
						</div>
					</div>
					<p>As you can see in our “before” example, it’s challenging to find the simple term “cough” about a third of the way down the list buried amidst the many other complex terms.</p>
					<p>Here in our “after” example the simple cough is listed at the top while the other options are listed alphabetically after a visual break, further down the list.</p>
				</div>
			</div>
		</section><!--end section changing-the-allergy-list-->
		
		<section id="review" class="section">
			<div class="container">
				<div class="sixteen columns">
					<div class="sectionStart">
						<hr/>
						<h3>Summary</h3>
					</div>
					<p><ol>
						<li>Consider the user and the task at hand. That consideration will help you decide what details and functionality are needed for a particular medication list view.</li>
						<li>Thoroughly understand the user tasks and their mental models. The deeper your understanding of the user tasks, the richer and more useful your designed user experience will be.</li>
						<li>Reduce information chaos by eliminating unnecessary details and ambiguity.</li>
						<li>Reduce cognitive load. Don’t make the user do math when the application could. Don’t require repetitive reading. Hide unessential details.</li>
					</ol></p>					
				</div>
			</div>
		</section><!--end section review-->
		
		<footer class="chapterEnd">
			<div class="container">
				<div class="sixteen columns">
					<div class="sectionStart">
						<hr />
					</div>
					<div class="cf">
						<div class="fleft" id="prevCh">
							<p class="pagination prev_ch"><a href="./medication-reconciliation.php"><span class="prev"></span>Medication Reconciliation</a></p></div>
						<div class="fright" id="nextCh">
							<p class="pagination next_ch"><a href="./eprescribing.php">ePrescribing<span class="next"></span></a></p></div>
					</div>
				</div>
			</div>
		</footer>
	</section>
	

</div><!--end wrapper-->
	<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
	<script type="text/javascript" src="./assets/js/modernizr.custom.js"></script>
	<script src="./assets/js/main.js" type="text/javascript"></script>
	<script type="text/javascript" src="./assets/js/jquery.fancybox.js"></script>
	<script type="text/javascript" src="./assets/js/jquery.cbpFWSlider.js"></script>
	<script type="text/javascript">
		$(function() {
			$( '#cbp-fwslider' ).cbpFWSlider();
			$( '#cbp-fwslider-2' ).cbpFWSlider();
			$( '#cbp-fwslider-3' ).cbpFWSlider();
		});
	</script>
	<script type="text/javascript">
		$(document).ready(function() {
			$(".fancybox").fancybox({
				closeEffect	: 'none',
				
				helpers : {
					title : {
						type : 'outside'
					}
				},
				
				afterLoad : function() {
					if (this.group.length > 1){
						this.title = (this.index + 1) + ' of ' + this.group.length + (this.title ? ' - ' + this.title : '');
					}
				}
			});
		});
	</script>
</body>
</html>