<br><br>
<h2>Regulatory Assessment Tool</h2>
<br>

<?php echo form_open('index.php/rat/result'); ?>

<form action="result" method="post">
    <table class="GeneratedTable">
        <thead>
            <tr>
                <th>I</th>
                <th>Construction</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Permit application for construction toilet facilities</td>
                <td><input class="messageCheckbox" type="checkbox" value="con1" name="check_list[]"></td>
            </tr>
            <tr>
                <td>2</td>
                <td>Building codes for the toilet facilities</td>
                <td><input class="messageCheckbox" type="checkbox" value="con2" name="check_list[]"></td>
            </tr>
            <tr>
                <td>3</td>
                <td>Building codes for the drainage facilities</td>
                <td><input class="messageCheckbox" type="checkbox" value="con3" name="check_list[]"></td>
            </tr>
            <tr>
                <td>4</td>
                <td>Maintainance of the drainage facilities</td>
                <td><input class="messageCheckbox" type="checkbox" value="con4" name="check_list[]"></td>
            </tr>
            <tr>
                <td>5</td>
                <td>Inspection and certification</td>
                <td><input class="messageCheckbox" type="checkbox" value="con5" name="check_list[]"></td>
            </tr>
            <tr>
                <td>6</td>
                <td>Pernal code and fee for the construction process</td>
                <td><input class="messageCheckbox" type="checkbox" value="con6" name="check_list[]"></td>
            </tr>
        </tbody>
    </table>

    <input type="submit" name="submit" value="Submit">
</form>

<?php echo form_close(); ?>
