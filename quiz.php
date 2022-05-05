<!DOCTYPE html>
<html lang="en">
<head>
    <title>Quiz</title>

    <meta charset="UTF-8">
    <meta name="description" content="Search engine quiz"/>
    <meta name="keywords" content="Search engine, Google, searching, quiz"/>
    <meta name="author" content="Jude Gualano"/>
    
    <!-- Styling -->
    <?php
        include 'styling.inc';
    ?>
</head>
<body>
    <?php
        include 'menu.inc';
    ?>
    
    <header id="quiz-header">
        <h1>Quiz</h1>
    </header>
    
    <main>
        <form method="post" action="http://mercury.swin.edu.au/it000000/formtest.php">
            <fieldset>
                <legend>Student Details</legend>
                <table>
                    <tr>
                        <td><label for="first_name">First Name</label></td>
                        <td><input type="text" name="first_name" id="first_name" pattern="[a-zA-Z-\s]{0,30}" required="required"></td>
                    </tr>
                    <tr>
                        <td><label for="last_name">Surname</label></td>
                        <td><input type="text" name="last_name" id="last_name" pattern="[a-zA-Z-\s]{0,30}" required="required"></td>
                    </tr>
                    <tr>
                        <td><label for="student_id">Student ID</label></td>
                        <td><input type="text" name="student_id" id="student_id" pattern="\d{7}|\d{10}" required="required"> </td>
                    </tr>
                </table>
    
            </fieldset>
    
            <fieldset>
                <legend>Question 1</legend>
                <label class="question quiz-row" for="q1">The process of improving website rankings on search engines is called:</label>
                <input class="quiz-row" type="text" name="q1" id="q1" required="required">
    
            </fieldset>
    
            <fieldset>
                <legend>Question 2</legend>
                <label class="question">What are the characteristics of search engines? Select all those that may apply.</label>
                <div class="quiz-row">
                    <input type="checkbox" id="q2_a" name="q2[]" value="a"/>
                    <label for="q2_a">Bots retrieve page information by ‘crawling’ websites.</label>
                </div>
                
                <div class="quiz-row">
                    <input type="checkbox" id="q2_b" name="q2[]" value="b"/>
                    <label for="q2_b">Databases are reserved for storing popular sites.</label>
                </div>

                <div class="quiz-row">
                    <input type="checkbox" id="q2_c" name="q2[]" value="c"/>
                    <label for="q2_c">Common search phrases are cached.</label>
                </div>
                
                <div class="quiz-row">
                    <input type="checkbox" id="q2_d" name="q2[]" value="d"/>
                    <label for="q2_d">Pages are analysed through indexing.</label>
                </div>
                
                <div class="quiz-row">
                    <input type="checkbox" id="q2_e" name="q2[]" value="e"/>
                    <label for="q2_e">Search engines are not subject to quality concerns.</label>
                </div>

            </fieldset>
    
            <fieldset>
                <legend>Question 3</legend>
                <label class="question">The year Sergey Brin and Larry Page founded Google, the popular search engine company, was:</label>
                
                <div class="quiz-row">
                    <input type="radio" id="q3_a" name="q3" value="a" required="required"/>
                    <label for="q3_a">1996</label>
                </div>
    
                <div class="quiz-row">
                    <input type="radio" id="q3_b" name="q3" value="b" required="required"/>
                    <label for="q3_b">1998</label>
                </div>
                
                <div class="quiz-row">
                    <input type="radio" id="q3_c" name="q3" value="c" required="required"/>
                    <label for="q3_c">2000</label>
                </div>
                
                <div class="quiz-row">
                    <input type="radio" id="q3_d" name="q3" value="d" required="required"/>
                    <label for="q3_d">2002</label>
                </div>
                
                <div class="quiz-row">
                    <input type="radio" id="q3_e" name="q3" value="e" required="required"/>
                    <label for="q3_e">2004</label>
                </div>
            </fieldset>
    
            <fieldset>
                <legend>Question 4</legend>
                <label class="question" for="q4">Which search engine strides itself on user privacy by not tracking or collecting personal information when compared to its competitors?</label>
                <select class="quiz-row" name="q4" id="q4">
                    <option value="">Please Select</option>
                    <option value="Yahoo! Search">Yahoo! Search</option>
                    <option value="Google">Google</option>
                    <option value="DuckDuckGo">DuckDuckGo</option>
                    <option value="Bing">Bing</option>
                    <option value="Yandex">Yandex</option>
                </select>
            </fieldset>
    
            <fieldset>
                <legend>Question 5</legend>
                <label class="question" for="q5">In 2022, Google’s market share in search engines was closest to:</label>
                <div class="quiz-row" id="inline-row">
                    <input class="quiz-row" id="q5" name="q5" type="number" min="50" max="90" step="10">
                    <p>%</p>
                </div>
            </fieldset>

            <div id="quiz-btn-group">
                <input class="quiz-btn" type="submit" value="Submit">
                <input class="quiz-btn" type="reset" value="Reset">
            </div>
        </form>
    </main>

    <?php
        include 'footer.inc'
    ?>

</body>
</html>