<!DOCTYPE html>
<html>
  <head>
    <title>View Student Details</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap1.css" />
  </head>

  <body>
    <nav class="nav">
      <button type="button" class="nav-close" onclick="toggleNav()">
        <ion-icon name="close-outline" size="large"></ion-icon>
      </button>
      <div class="nav-links-container">
        <a href="index.html" class="nav__link">
          <span class="nav__text">HOME</span>
        </a>
        <a href="details.php" class="nav__link">
          <span class="nav__text">View Student Details</span>
        </a>
        <a href="#" class="nav__link">
          <span class="nav__text">Edit Student Details</span>
        </a>
        <a href="#" class="nav__link">
          <span class="nav__text">Remove Student Details</span>
        </a>
      </div>
    </nav>

    <main class="main">

      <button type="button" onclick="toggleNav()">
        <ion-icon name="menu-outline" size="large"></ion-icon>
      </button>

      <table  id="student"  width="100%">
      <thead>
        <tr>
          <th><input type="text" class="search-input" placeholder="ID"></th>
          <th><input type="text" class="search-input" placeholder="Student Name"></th>
          <th><input type="text" class="search-input" placeholder="Parent Name"></th>
          <th><input type="text" class="search-input" placeholder="Gender"></th>
          <th><input type="text" class="search-input" placeholder="Date of Birth"></th>
          <th><input type="text" class="search-input" placeholder="School"></th>
          <th><input type="text" class="search-input" placeholder="Class"></th>
          <th><input type="text" class="search-input" placeholder="Section"></th>
        </tr>
      </thead>
      <tbody>
        <?php
          $conn = mysqli_connect("localhost","root","","details");
          if($conn-> connect_error){
          die("Connection failed:".$conn-> connect_error);
          }
      
          $sql = "SELECT id, studentName, parentName, gender, dob, school, class, section from studentdetails";
          $result = $conn-> query($sql);

          if ($result-> num_rows >0) {
          while($row = $result->fetch_assoc()) {
          echo "<tr><td>";
          echo $row['id'];
          echo "</td><td>";
          echo $row['studentName'];
          echo "</td><td>";
          echo $row['parentName'];
          echo "</td><td>";
          echo $row['gender'];
          echo "</td><td>";
          echo $row['dob'];
          echo "</td><td>";
          echo $row['school'];
          echo "</td><td>";
          echo $row['class'];
          echo "</td><td>";
          echo $row['section'];
          echo"</td></tr>";
          }
          echo "</table>";
          }
          else {
          echo "0 result";
          }
        ?>      
      </tbody> 
    </table>
    </main >

    <script>
      function toggleNav(){
        document.body.classList.toggle("nav-open");
      }
    </script>  
    <script>
      document.addEventListener("DOMContentLoaded", () => {
      document.querySelectorAll(".search-input").forEach((inputField) => {
      const tableRows = inputField
      .closest("table")
      .querySelectorAll("tbody > tr");
    const headerCell = inputField.closest("th");
    const otherHeaderCells = headerCell.closest("tr").children;
    const columnIndex = Array.from(otherHeaderCells).indexOf(headerCell);
    const searchableCells = Array.from(tableRows).map(
      (row) => row.querySelectorAll("td")[columnIndex]
    );

    inputField.addEventListener("input", () => {
      const searchQuery = inputField.value.toLowerCase();

      for (const tableCell of searchableCells) {
        const row = tableCell.closest("tr");
        const value = tableCell.textContent.toLowerCase().replace(",", "");

        row.style.visibility = null;

        if (value.search(searchQuery) === -1) {
          row.style.visibility = "collapse";
        }
      }
    });
  });
});
</script>

    <script src="./src/tablesort.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

  </body>
</html>