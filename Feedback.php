<!DOCTYPE html>
<html>
<head>
  <title>Feedback Form</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      text-align: center;
      margin: 0;
      padding: 0;
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      overflow: hidden;
      background: linear-gradient(120deg, #84fab0 0%, #8fd3f4 100%);
    }

    .container {
      position: relative;
      width: 100%;
      height: 100%;
      overflow: hidden;
      display: flex;
      justify-content: center;
      align-items: center;
      z-index: 1;
    }

    .container::before {
      content: '';
      position: absolute;
      width: 200%;
      height: 200%;
      top: -50%;
      left: -50%;
      background: url('https://www.toptal.com/designers/subtlepatterns/uploads/dot-grid.png');
      animation: animateBackground 20s linear infinite;
      opacity: 0.2;
    }

    @keyframes animateBackground {
      0% { transform: translate(0, 0); }
      100% { transform: translate(50%, 50%); }
    }

    form {
      display: flex;
      flex-direction: column;
      align-items: center;
      padding: 20px;
      border: 1px solid #ccc;
      border-radius: 10px;
      box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
      background-color: #fff;
      width: 300px;
      position: relative;
      z-index: 2;
    }

    label {
      margin-bottom: 5px;
      font-weight: bold;
      color: #333;
    }

    select,
    input[type="password"] {
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 3px;
      width: 100%;
      box-sizing: border-box;
      margin-bottom: 20px;
      transition: border-color 0.3s ease;
    }

    select:focus,
    input[type="password"]:focus {
      border-color: #4CAF50;
    }

    button {
      background-color: #4CAF50;
      color: white;
      padding: 10px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      margin-top: 10px;
      transition: background-color 0.3s ease, transform 0.3s ease;
    }

    button:hover {
      background-color: #45a049;
      transform: scale(1.05);
    }

    button:active {
      transform: scale(1);
    }

    .buttons {
      display: flex;
      gap: 10px;
    }
  </style>
</head>
<body>
  <div class="container">
    <form id="loginForm" action="validate_login.php" method="post">
      <h2>Feedback Form</h2>
      <label for="course">Course:</label>
      <select id="course" name="course" required>
        <option value="cp09">CP09</option>
        <option value="cp01">CP01</option>
		<option value="cp08">CP08</option>
      </select>

      <label for="batch">Batch:</label>
      <select id="batch" name="batch" required>
        <option value="a">A</option>
        <option value="b">B</option>
        <option value="c">C</option>
      </select>

      <label for="password">Password:</label>
      <input type="password" id="password" name="password" required>

      <div class="buttons">
        <button type="submit">Submit</button>
        <button type="reset">Reset</button>
      </div>
	  <?php
        if (isset($_GET['error'])) {
            echo '<p class="error-message">Invalid credentials. Please try again.</p>';
        }
      ?>
    </form>
  </div>

  <script>
    const courseSelect = document.getElementById('course');
    const batchSelect = document.getElementById('batch');

    const batchOptions = {
      cp09: ['A', 'B'],
      cp01: ['A'],
	  cp08: ['A', 'B', 'C']
    };

    courseSelect.addEventListener('change', function() {
      const selectedCourse = courseSelect.value;
      const batches = batchOptions[selectedCourse];

      // Clear current batch options
      batchSelect.innerHTML = '';

      // Add new batch options
      batches.forEach(batch => {
        const option = document.createElement('option');
        option.value = batch.toLowerCase();
        option.textContent = batch;
        batchSelect.appendChild(option);
      });
    });

    document.getElementById('feedbackForm').addEventListener('submit', function(event) {
      event.preventDefault();
      
      // Simple form validation
      const course = document.getElementById('course').value;
      const batch = document.getElementById('batch').value;
      const password = document.getElementById('password').value;
      
      if (course && batch && password) {
        alert('Form submitted successfully!');
      } else {
        alert('Please fill in all fields.');
      }
    });

    // Trigger change event on page load to set initial batch options
    courseSelect.dispatchEvent(new Event('change'));
  </script>
</body>
</html>
