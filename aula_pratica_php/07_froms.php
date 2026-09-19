<meta charset="utf-8">
<h2>Formulariu naran</h2>
<form method="post" action="07_form.php">
<label>Naran:
<input type="text" name="naran" required>
</label>
<button type="submit">Haruka</button>
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
$raw = $_POST["naran"] ?? "";
$naran = is_string($raw) ? trim($raw) : "";
if ($naran === "") {
echo "Favor prienxe naran.";
} else {
echo "Ola, " . htmlspecialchars(
$naran,
ENT_QUOTES,
"UTF-8"
) . "!";
}
}
?>