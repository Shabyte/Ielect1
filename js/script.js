
// <!-- chart -->

    document.addEventListener('DOMContentLoaded', function () {
      var ctx1 = document.getElementById('pieChart1').getContext('2d');
      var data1 = {
        labels: ['Voters', 'Voted'],
        datasets: [{
          data: [70, 30], // Replace with your actual data
          backgroundColor: ['rgb(75, 192, 192)', 'rgb(255, 99, 132)'],
        }]
      };
      var options1 = {
        responsive: true,
      };
      var pieChart1 = new Chart(ctx1, {
        type: 'pie',
        data: data1,
        options: options1
      });

      var ctx2 = document.getElementById('pieChart2').getContext('2d');
      var data2 = {
        labels: ['Category1', 'Category2'],
        datasets: [{
          data: [40, 60], // Replace with your actual data
          backgroundColor: ['rgb(255, 206, 86)', 'rgb(54, 162, 235)'],
        }]
      };
      var options2 = {
        responsive: true,
      };
      var pieChart2 = new Chart(ctx2, {
        type: 'pie',
        data: data2,
        options: options2
      });
      
    });


// <!-- piechart -->


// add admin 
// Generate username and admin ID based on department and course
document.addEventListener('DOMContentLoaded', function() {
  // Call the function initially to generate values
  generateUsernameAndAdminID();

  // Add event listeners for department and course dropdowns
  document.getElementById('department').addEventListener('change', function() {
      generateUsernameAndAdminID();
  });

  document.getElementById('course').addEventListener('change', function() {
      generateUsernameAndAdminID();
  });

  // Function to generate username and admin ID
  function generateUsernameAndAdminID() {
      const department = document.getElementById('department').value;
      const course = document.getElementById('course').value;

      const username = department + '_' + course;
      document.getElementById('userName').value = username;

      // Ensure that the admin ID field is populated with the correct value
      const adminID = 'ADM_' + Math.floor(1000 + Math.random() * 9000);
      document.getElementById('admin_id').value = adminID;
  }
});
