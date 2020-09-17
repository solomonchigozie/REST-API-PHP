<?php
//rest api with php
if(isset($_POST['id'])){
	$id = $_POST['id'];
	$key = $_POST['key'];
	
	$url = "https://www.sofavy.com/api.php?ID=".$id."&APIKey=".$key;
	
	
	$client = curl_init($url);
	curl_setopt($client,CURLOPT_RETURNTRANSFER,true);
	$response = curl_exec($client);
	
	$result = json_decode($response);
	
	echo "phone : $result->phoneno <br>";
	echo "balance : $result->balance <br>";
	echo "date : $result->date <br>";
}

?>
<form action="" method="POST">
<label>ID:</label><br />
<input type="text" name="id" placeholder="User ID" required/>
<br /><br />
<label>Key:</label><br />
<input type="text" name="key" placeholder="Enter key" required/>
<br /><br />

<button type="submit" name="submit">Submit</button>
</form>