<!DOCTYPE html>
<html>
<style>
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
<body>



<div>
  <form action="//simpan_content.php" method="post">
    <label for="namalink">namalink</label>
    <input type="text" id="namalink" name="namalink" placeholder="namalink..">

    <label for="isi">isi</label>
    <input type="text" id="isi" name="isi" placeholder="isi..">

    <label for="file">file</label>
    <input type="file" id="file" name="file" placeholder="file..">

    <input type="submit" value="Submit">
  </form>
</div>

</body>
</html>