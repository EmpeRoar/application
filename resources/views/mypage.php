<!Doctype html>
<html>
<head>
    <title>My Page</title>
</head>
<body>
    <div>
        <h1>Hello My Page</h1>
        <h2>Customers</h2>
        <?php foreach($customers as $customer): ?>
        <?php echo $customer->name; ?>
        <?php endforeach; ?>
        
    </div>
</body>
</html>