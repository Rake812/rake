<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Feedback Table</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 20px;
    }

    table {
      width: 100%;
      border-collapse: collapse;
    }

    th, td {
      border: 1px solid black;
      text-align: center;
      padding: 8px;
    }

    th {
      background-color: #f2f2f2;
    }

    input[type="number"] {
      width: 100%;
      box-sizing: border-box;
      text-align: center;
    }
  </style>
</head>
<body>
<h2><center>Faculty Feedback</center></h2>
<form id="feedbackForm" action="submit_feedback.php" method="POST">
  <table>
    <thead>
      <tr>
        <th rowspan="2">Sl. No.</th>
        <th rowspan="2">Parameters</th>
        <th colspan="13">Subjects</th>
      </tr>
      <tr>
        <th>English</th>
        <th>Mathematics</th>
        <th>Applied Science</th>
        <th>Electronics-I</th>
        <th>Electrical Engineering</th>
        <th>Applied Science Lab</th>
        <th>Electronics Lab</th>
        <th>Electrical Lab</th>
        <th>Engineering Drawing</th>
        <th>Professional Practice</th>
        <th>Workshop</th>
        <th>Computer Lab</th>
        <th>Communication Skills</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>Ability of the faculty to transfer the knowledge & skill</td>
        <td><input type="number" name="0_english" min="1" max="10" required></td>
        <td><input type="number" name="0_mathematics" min="1" max="10" required></td>
        <td><input type="number" name="0_applied_science" min="1" max="10" required></td>
        <td><input type="number" name="0_electronics_i" min="1" max="10" required></td>
        <td><input type="number" name="0_electrical_engineering" min="1" max="10" required></td>
        <td><input type="number" name="0_applied_science_lab" min="1" max="10" required></td>
        <td><input type="number" name="0_electronics_lab" min="1" max="10" required></td>
        <td><input type="number" name="0_electrical_lab" min="1" max="10" required></td>
        <td><input type="number" name="0_engineering_drawing" min="1" max="10" required></td>
        <td><input type="number" name="0_professional_practice" min="1" max="10" required></td>
        <td><input type="number" name="0_workshop" min="1" max="10" required></td>
        <td><input type="number" name="0_computer_lab" min="1" max="10" required></td>
        <td><input type="number" name="0_communication_skills" min="1" max="10" required></td>
      </tr>
      <tr>
        <td>2</td>
        <td>Presentation by the faculty</td>
        <td><input type="number" name="1_english" min="1" max="10" required></td>
        <td><input type="number" name="1_mathematics" min="1" max="10" required></td>
        <td><input type="number" name="1_applied_science" min="1" max="10" required></td>
        <td><input type="number" name="1_electronics_i" min="1" max="10" required></td>
        <td><input type="number" name="1_electrical_engineering" min="1" max="10" required></td>
        <td><input type="number" name="1_applied_science_lab" min="1" max="10" required></td>
        <td><input type="number" name="1_electronics_lab" min="1" max="10" required></td>
        <td><input type="number" name="1_electrical_lab" min="1" max="10" required></td>
        <td><input type="number" name="1_engineering_drawing" min="1" max="10" required></td>
        <td><input type="number" name="1_professional_practice" min="1" max="10" required></td>
        <td><input type="number" name="1_workshop" min="1" max="10" required></td>
        <td><input type="number" name="1_computer_lab" min="1" max="10" required></td>
        <td><input type="number" name="1_communication_skills" min="1" max="10" required></td>
      </tr>
      <tr>
        <td>3</td>
        <td>Mannerism of the faculty</td>
        <td><input type="number" name="2_english" min="1" max="10" required></td>
        <td><input type="number" name="2_mathematics" min="1" max="10" required></td>
        <td><input type="number" name="2_applied_science" min="1" max="10" required></td>
        <td><input type="number" name="2_electronics_i" min="1" max="10" required></td>
        <td><input type="number" name="2_electrical_engineering" min="1" max="10" required></td>
        <td><input type="number" name="2_applied_science_lab" min="1" max="10" required></td>
        <td><input type="number" name="2_electronics_lab" min="1" max="10" required></td>
        <td><input type="number" name="2_electrical_lab" min="1" max="10" required></td>
        <td><input type="number" name="2_engineering_drawing" min="1" max="10" required></td>
        <td><input type="number" name="2_professional_practice" min="1" max="10" required></td>
        <td><input type="number" name="2_workshop" min="1" max="10" required></td>
        <td><input type="number" name="2_computer_lab" min="1" max="10" required></td>
        <td><input type="number" name="2_communication_skills" min="1" max="10" required></td>
      </tr>
      <tr>
        <td>4</td>
        <td>Ability to clarify the doubts</td>
        <td><input type="number" name="3_english" min="1" max="10" required></td>
        <td><input type="number" name="3_mathematics" min="1" max="10" required></td>
        <td><input type="number" name="3_applied_science" min="1" max="10" required></td>
        <td><input type="number" name="3_electronics_i" min="1" max="10" required></td>
        <td><input type="number" name="3_electrical_engineering" min="1" max="10" required></td>
        <td><input type="number" name="3_applied_science_lab" min="1" max="10" required></td>
        <td><input type="number" name="3_electronics_lab" min="1" max="10" required></td>
        <td><input type="number" name="3_electrical_lab" min="1" max="10" required></td>
        <td><input type="number" name="3_engineering_drawing" min="1" max="10" required></td>
        <td><input type="number" name="3_professional_practice" min="1" max="10" required></td>
        <td><input type="number" name="3_workshop" min="1" max="10" required></td>
        <td><input type="number" name="3_computer_lab" min="1" max="10" required></td>
        <td><input type="number" name="3_communication_skills" min="1" max="10" required></td>
      </tr>
      <tr>
        <td>5</td>
        <td>Treats all the students without partiality & respect</td>
        <td><input type="number" name="4_english" min="1" max="10" required></td>
        <td><input type="number" name="4_mathematics" min="1" max="10" required></td>
        <td><input type="number" name="4_applied_science" min="1" max="10" required></td>
        <td><input type="number" name="4_electronics_i" min="1" max="10" required></td>
        <td><input type="number" name="4_electrical_engineering" min="1" max="10" required></td>
        <td><input type="number" name="4_applied_science_lab" min="1" max="10" required></td>
        <td><input type="number" name="4_electronics_lab" min="1" max="10" required></td>
        <td><input type="number" name="4_electrical_lab" min="1" max="10" required></td>
        <td><input type="number" name="4_engineering_drawing" min="1" max="10" required></td>
        <td><input type="number" name="4_professional_practice" min="1" max="10" required></td>
        <td><input type="number" name="4_workshop" min="1" max="10" required></td>
        <td><input type="number" name="4_computer_lab" min="1" max="10" required></td>
        <td><input type="number" name="4_communication_skills" min="1" max="10" required></td>
      </tr>
      <tr>
        <td>6</td>
        <td>Ability to enhance students learning</td>
        <td><input type="number" name="5_english" min="1" max="10" required></td>
        <td><input type="number" name="5_mathematics" min="1" max="10" required></td>
        <td><input type="number" name="5_applied_science" min="1" max="10" required></td>
        <td><input type="number" name="5_electronics_i" min="1" max="10" required></td>
        <td><input type="number" name="5_electrical_engineering" min="1" max="10" required></td>
        <td><input type="number" name="5_applied_science_lab" min="1" max="10" required></td>
        <td><input type="number" name="5_electronics_lab" min="1" max="10" required></td>
        <td><input type="number" name="5_electrical_lab" min="1" max="10" required></td>
        <td><input type="number" name="5_engineering_drawing" min="1" max="10" required></td>
        <td><input type="number" name="5_professional_practice" min="1" max="10" required></td>
        <td><input type="number" name="5_workshop" min="1" max="10" required></td>
        <td><input type="number" name="5_computer_lab" min="1" max="10" required></td>
        <td><input type="number" name="5_communication_skills" min="1" max="10" required></td>
      </tr>
      <tr>
        <td>7</td>
        <td>Knows a variety of effective teaching & assessment practices</td>
        <td><input type="number" name="6_english" min="1" max="10" required></td>
        <td><input type="number" name="6_mathematics" min="1" max="10" required></td>
        <td><input type="number" name="6_applied_science" min="1" max="10" required></td>
        <td><input type="number" name="6_electronics_i" min="1" max="10" required></td>
        <td><input type="number" name="6_electrical_engineering" min="1" max="10" required></td>
        <td><input type="number" name="6_applied_science_lab" min="1" max="10" required></td>
        <td><input type="number" name="6_electronics_lab" min="1" max="10" required></td>
        <td><input type="number" name="6_electrical_lab" min="1" max="10" required></td>
        <td><input type="number" name="6_engineering_drawing" min="1" max="10" required></td>
        <td><input type="number" name="6_professional_practice" min="1" max="10" required></td>
        <td><input type="number" name="6_workshop" min="1" max="10" required></td>
        <td><input type="number" name="6_computer_lab" min="1" max="10" required></td>
        <td><input type="number" name="6_communication_skills" min="1" max="10" required></td>
      </tr>
      <tr>
        <td>8</td>
        <td>Punctuality of the faculty</td>
        <td><input type="number" name="7_english" min="1" max="10" required></td>
        <td><input type="number" name="7_mathematics" min="1" max="10" required></td>
        <td><input type="number" name="7_applied_science" min="1" max="10" required></td>
        <td><input type="number" name="7_electronics_i" min="1" max="10" required></td>
        <td><input type="number" name="7_electrical_engineering" min="1" max="10" required></td>
        <td><input type="number" name="7_applied_science_lab" min="1" max="10" required></td>
        <td><input type="number" name="7_electronics_lab" min="1" max="10" required></td>
        <td><input type="number" name="7_electrical_lab" min="1" max="10" required></td>
        <td><input type="number" name="7_engineering_drawing" min="1" max="10" required></td>
        <td><input type="number" name="7_professional_practice" min="1" max="10" required></td>
        <td><input type="number" name="7_workshop" min="1" max="10" required></td>
        <td><input type="number" name="7_computer_lab" min="1" max="10" required></td>
        <td><input type="number" name="7_communication_skills" min="1" max="10" required></td>
      </tr>
      <tr>
        <td>9</td>
        <td>Maintain the discipline in the classroom</td>
        <td><input type="number" name="8_english" min="1" max="10" required></td>
        <td><input type="number" name="8_mathematics" min="1" max="10" required></td>
        <td><input type="number" name="8_applied_science" min="1" max="10" required></td>
        <td><input type="number" name="8_electronics_i" min="1" max="10" required></td>
        <td><input type="number" name="8_electrical_engineering" min="1" max="10" required></td>
        <td><input type="number" name="8_applied_science_lab" min="1" max="10" required></td>
        <td><input type="number" name="8_electronics_lab" min="1" max="10" required></td>
        <td><input type="number" name="8_electrical_lab" min="1" max="10" required></td>
        <td><input type="number" name="8_engineering_drawing" min="1" max="10" required></td>
        <td><input type="number" name="8_professional_practice" min="1" max="10" required></td>
        <td><input type="number" name="8_workshop" min="1" max="10" required></td>
        <td><input type="number" name="8_computer_lab" min="1" max="10" required></td>
        <td><input type="number" name="8_communication_skills" min="1" max="10" required></td>
      </tr>
      <tr>
        <td>10</td>
        <td>Encourages in extracurricular activities</td>
        <td><input type="number" name="9_english" min="1" max="10" required></td>
        <td><input type="number" name="9_mathematics" min="1" max="10" required></td>
        <td><input type="number" name="9_applied_science" min="1" max="10" required></td>
        <td><input type="number" name="9_electronics_i" min="1" max="10" required></td>
        <td><input type="number" name="9_electrical_engineering" min="1" max="10" required></td>
        <td><input type="number" name="9_applied_science_lab" min="1" max="10" required></td>
        <td><input type="number" name="9_electronics_lab" min="1" max="10" required></td>
        <td><input type="number" name="9_electrical_lab" min="1" max="10" required></td>
        <td><input type="number" name="9_engineering_drawing" min="1" max="10" required></td>
        <td><input type="number" name="9_professional_practice" min="1" max="10" required></td>
        <td><input type="number" name="9_workshop" min="1" max="10" required></td>
        <td><input type="number" name="9_computer_lab" min="1" max="10" required></td>
        <td><input type="number" name="9_communication_skills" min="1" max="10" required></td>
      </tr>
      <!-- Repeat for other parameters -->
    </tbody>
  </table><br><br>
  <table class="table table-bordered rating-scale">
            <thead>
                <tr>
                    <th>Always</th>
                    <th>Very Often</th>
                    <th>Often</th>
                    <th>Sometimes</th>
                    <th>Never</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>10,9</td>
                    <td>8,7</td>
                    <td>6,5</td>
                    <td>4, 3</td>
                    <td>2, 1</td>
                </tr>
            </tbody>
        </table>
        <div class="text-center">
            <input type="submit" class="btn btn-primary" value="Submit Feedback">
            <input type="reset" class="btn btn-primary" value="Reset Feedback">
        </div>
    </form>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
