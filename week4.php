<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Functions - สูตรคูณและบวก</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }
        
        .container {
            background: white;
            border-radius: 10px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
            padding: 30px;
            max-width: 900px;
            width: 100%;
        }
        
        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 30px;
            font-size: 28px;
        }
        
        .functions-wrapper {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 30px;
            margin-bottom: 30px;
        }
        
        .function-box {
            background: #f8f9fa;
            padding: 20px;
            border-radius: 8px;
            border-left: 4px solid #667eea;
        }
        
        .function-box h2 {
            font-size: 18px;
            color: #667eea;
            margin-bottom: 15px;
        }
        
        .form-group {
            margin-bottom: 15px;
        }
        
        label {
            display: block;
            margin-bottom: 5px;
            color: #555;
            font-weight: bold;
        }
        
        input[type="number"], input[type="text"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 14px;
            transition: border-color 0.3s;
        }
        
        input[type="number"]:focus, input[type="text"]:focus {
            outline: none;
            border-color: #667eea;
            box-shadow: 0 0 5px rgba(102, 126, 234, 0.5);
        }
        
        button {
            background: #667eea;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 14px;
            font-weight: bold;
            width: 100%;
            transition: background 0.3s;
        }
        
        button:hover {
            background: #764ba2;
        }
        
        .result {
            margin-top: 20px;
            padding: 15px;
            background: white;
            border-radius: 5px;
            border: 2px solid #667eea;
        }
        
        .result h3 {
            color: #667eea;
            font-size: 16px;
            margin-bottom: 10px;
        }
        
        .multiplication-table {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(100px, 1fr));
            gap: 5px;
        }
        
        .multiplication-item {
            background: #e8eaf6;
            padding: 8px;
            border-radius: 4px;
            text-align: center;
            font-size: 13px;
            color: #667eea;
            font-weight: bold;
        }
        
        .addition-result {
            font-size: 18px;
            color: #764ba2;
            font-weight: bold;
            text-align: center;
        }
        
        .error {
            color: #d32f2f;
            background: #ffebee;
            padding: 10px;
            border-radius: 5px;
            margin-top: 10px;
        }
        
        .success {
            color: #388e3c;
            background: #e8f5e9;
            padding: 10px;
            border-radius: 5px;
            margin-top: 10px;
        }
        
        @media (max-width: 768px) {
            .functions-wrapper {
                grid-template-columns: 1fr;
            }
            
            h1 {
                font-size: 22px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>🧮 PHP Functions - สูตรคูณและบวกเลข</h1>
        
        <div class="functions-wrapper">
            <!-- Function 1: Multiplication Table -->
            <div class="function-box">
                <h2>📊 ฟังก์ชันที่ 1: สูตรคูณ</h2>
                <form method="POST">
                    <div class="form-group">
                        <label for="multiplication_number">ป้อนตัวเลข (1-12):</label>
                        <input type="number" id="multiplication_number" name="multiplication_number" min="1" max="12" placeholder="เช่น 3" required>
                    </div>
                    <button type="submit" name="action" value="multiply">แสดงสูตรคูณ</button>
                </form>
                
                <?php
                if ($_SERVER['REQUEST_METHOD'] === 'POST' && $_POST['action'] === 'multiply') {
                    $number = isset($_POST['multiplication_number']) ? intval($_POST['multiplication_number']) : 0;
                    
                    if ($number > 0 && $number <= 12) {
                        echo '<div class="result">';
                        echo '<h3>สูตรคูณของ ' . $number . '</h3>';
                        echo '<div class="multiplication-table">';
                        
                        // Loop to display multiplication table
                        for ($i = 1; $i <= 12; $i++) {
                            $result = $number * $i;
                            echo '<div class="multiplication-item">' . $number . ' × ' . $i . ' = ' . $result . '</div>';
                        }
                        
                        echo '</div>';
                        echo '</div>';
                    } else {
                        echo '<div class="error">❌ โปรดป้อนตัวเลขระหว่าง 1 ถึง 12</div>';
                    }
                }
                ?>
            </div>
            
            <!-- Function 2: Addition -->
            <div class="function-box">
                <h2>➕ ฟังก์ชันที่ 2: บวกเลข</h2>
                <form method="POST">
                    <div class="form-group">
                        <label for="number1">ตัวเลขที่ 1:</label>
                        <input type="number" id="number1" name="number1" placeholder="เช่น 5" required>
                    </div>
                    <div class="form-group">
                        <label for="number2">ตัวเลขที่ 2:</label>
                        <input type="number" id="number2" name="number2" placeholder="เช่น 10" required>
                    </div>
                    <button type="submit" name="action" value="add">คำนวณผลบวก</button>
                </form>
                
                <?php
                if ($_SERVER['REQUEST_METHOD'] === 'POST' && $_POST['action'] === 'add') {
                    $number1 = isset($_POST['number1']) ? floatval($_POST['number1']) : 0;
                    $number2 = isset($_POST['number2']) ? floatval($_POST['number2']) : 0;
                    $sum = $number1 + $number2;
                    
                    echo '<div class="result">';
                    echo '<h3>✅ ผลลัพธ์:</h3>';
                    echo '<div class="addition-result">';
                    echo $number1 . ' + ' . $number2 . ' = <span style="color: #d81b60;">' . $sum . '</span>';
                    echo '</div>';
                    echo '</div>';
                }
                ?>
            </div>
        </div>
    </div>
</body>
</html>
