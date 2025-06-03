<p>
    Hi <?php echo htmlspecialchars($_POST['name'] ?? 'Guest'); ?>.
    You are <?php echo (int) $_POST['age'] ?? 0; ?> years old.
    Your email is <?php echo htmlspecialchars($_POST['email'] ?? 'not provided'); ?>.
</p>