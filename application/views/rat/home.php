<?php echo form_open('index.php/rat/result'); ?>

<form method="post">
    <div class="tables_container">
        <table border=1 class="table">
        <caption><h4><b>Criteria on Regulation</b></h4></caption>
        <?php
            echo "<thead>";
                echo "<tr>";
                    echo "<th>I</th>";
                    echo "<th>Construction</th>";
                    echo "<th></th>";
                echo "</tr>";
            echo "</thead>";
            echo "<tbody>";
            foreach ($construction_records as $rec)
            {
                echo "<tr>";
                    echo "<td>".$rec->id."</td>";
                    echo "<td> <a title=\"".$rec->description."\">".$rec->attribute."</a></td>";
                    echo "<td>
                            <input class=\"checkbox\" type=\"hidden\" value=\"".$rec->attribute."\"name=\"check_list1[".$rec->id."]\">
                            <input class=\"checkbox\" type=\"checkbox\" value=1 name=\"check_list1[".$rec->id."]\"></td>";
                echo "</tr>";
            }
            echo "</tbody>";
        ?>
        <?php
            echo "<thead>";
                echo "<tr>";
                    echo "<th>II</th>";
                    echo "<th>Collection and transportation</th>";
                    echo "<th></th>";
                echo "</tr>";
            echo "</thead>";
            echo "<tbody>";
            foreach ($collection_records as $rec)
            {
                echo "<tr>";
                    echo "<td>".$rec->id."</td>";
                    echo "<td> <a title=\"".$rec->description."\">".$rec->attribute."</a></td>";
                    echo "<td>
                            <input class=\"checkbox\" type=\"hidden\" value=\"".$rec->attribute."\"name=\"check_list2[".$rec->id."]\">
                            <input class=\"checkbox\" type=\"checkbox\" value=1 name=\"check_list2[".$rec->id."]\"></td>";
                echo "</tr>";
            }
            echo "</tbody>";
        ?>
        <?php
            echo "<thead>";
                echo "<tr>";
                    echo "<th>III</th>";
                    echo "<th>Treatment and disposal reuse</th>";
                    echo "<th></th>";
                echo "</tr>";
            echo "</thead>";
            echo "<tbody>";
            foreach ($treatment_records as $rec)
            {
                echo "<tr>";
                    echo "<td>".$rec->id."</td>";
                    echo "<td> <a title=\"".$rec->description."\">".$rec->attribute."</a></td>";
                    echo "<td>
                            <input class=\"checkbox\" type=\"hidden\" value=\"".$rec->attribute."\"name=\"check_list3[".$rec->id."]\">
                            <input class=\"checkbox\" type=\"checkbox\" value=1 name=\"check_list3[".$rec->id."]\"></td>";
                echo "</tr>";
            }
            echo "</tbody>";
        ?>
        </table>
        <table border=1 class="table" id="right_table">
        <caption><h4><b>Activities, Enforcement, Institutional Relation</b></h4></caption>
        <?php
            echo "<thead>";
                echo "<tr>";
                    echo "<th>IV</th>";
                    echo "<th>Construction</th>";
                    echo "<th></th>";
                echo "</tr>";
            echo "</thead>";
            echo "<tbody>";
            foreach ($construction_act_records as $rec)
            {
                echo "<tr>";
                    echo "<td>".$rec->id."</td>";
                    echo "<td> <a title=\"".$rec->description."\">".$rec->attribute."</a></td>";
                    echo "<td>
                            <input class=\"checkbox\" type=\"hidden\" value=\"".$rec->attribute."\"name=\"check_list4[".$rec->id."]\">
                            <input class=\"checkbox\" type=\"checkbox\" value=1 name=\"check_list4[".$rec->id."]\"></td>";
                echo "</tr>";
            }
            echo "</tbody>";
        ?>
        <?php
            echo "<thead>";
                echo "<tr>";
                    echo "<th>V</th>";
                    echo "<th>Collection & Transporation</th>";
                    echo "<th></th>";
                echo "</tr>";
            echo "</thead>";
            echo "<tbody>";
            foreach ($collection_act_records as $rec)
            {
                echo "<tr>";
                    echo "<td>".$rec->id."</td>";
                    echo "<td> <a title=\"".$rec->description."\">".$rec->attribute."</a></td>";
                    echo "<td>
                            <input class=\"checkbox\" type=\"hidden\" value=\"".$rec->attribute."\"name=\"check_list5[".$rec->id."]\">
                            <input class=\"checkbox\" type=\"checkbox\" value=1 name=\"check_list5[".$rec->id."]\"></td>";
                echo "</tr>";
            }
            echo "</tbody>";
        ?>
        <?php
            echo "<thead>";
                echo "<tr>";
                    echo "<th>VI</th>";
                    echo "<th>Treatment/ disposal/ reuse</th>";
                    echo "<th></th>";
                echo "</tr>";
            echo "</thead>";
            echo "<tbody>";
            foreach ($treatment_act_records as $rec)
            {
                echo "<tr>";
                    echo "<td>".$rec->id."</td>";
                    echo "<td> <a title=\"".$rec->description."\">".$rec->attribute."</a></td>";
                    echo "<td>
                            <input class=\"checkbox\" type=\"hidden\" value=\"".$rec->attribute."\"name=\"check_list6[".$rec->id."]\">
                            <input class=\"checkbox\" type=\"checkbox\" value=1 name=\"check_list6[".$rec->id."]\"></td>";
                echo "</tr>";
            }
            echo "</tbody>";
        ?>
        </table>
        <br class="clearboth">
        <br class="clearboth">
        <hr>
        <br class="clearboth">
        <table border="1" class="table">
        <?php
            echo "<thead>";
                echo "<tr>";
                    echo "<th>VII</th>";
                    echo "<th>Other activities (Awareness, Education, Management)</th>";
                    echo "<th></th>";
                echo "</tr>";
            echo "</thead>";
            echo "<tbody>";
            foreach ($other_act_records as $rec)
            {
                echo "<tr>";
                    echo "<td>".$rec->id."</td>";
                    echo "<td> <a title=\"".$rec->description."\">".$rec->attribute."</a></td>";
                    echo "<td>
                            <input class=\"checkbox\" type=\"hidden\" value=\"".$rec->attribute."\"name=\"check_list7[".$rec->id."]\">
                            <input class=\"checkbox\" type=\"checkbox\" value=1 name=\"check_list7[".$rec->id."]\"></td>";
                echo "</tr>";
            }
            echo "</tbody>";
        ?>
        </table>
        <table border="1" class="table" id="right_table">
        <?php
            echo "<thead>";
                echo "<tr>";
                    echo "<th>VIII</th>";
                    echo "<th>Affordability to Pay</th>";
                    echo "<th></th>";
                echo "</tr>";
            echo "</thead>";
            echo "<tbody>";
            foreach ($affortability_records as $rec)
            {
                echo "<tr>";
                    echo "<td>".$rec->id."</td>";
                    echo "<td> <a title=\"".$rec->description."\">".$rec->attribute."</a></td>";
                    echo "<td>
                            <input class=\"checkbox\" type=\"hidden\" value=\"".$rec->attribute."\"name=\"check_list8[".$rec->id."]\">
                            <input class=\"checkbox\" type=\"checkbox\" value=1 name=\"check_list8[".$rec->id."]\"></td>";
                echo "</tr>";
            }
            echo "</tbody>";
        ?>
        <?php
            echo "<thead>";
                echo "<tr>";
                    echo "<th>IX</th>";
                    echo "<th>Priority of FSM in selected area</th>";
                    echo "<th></th>";
                echo "</tr>";
            echo "</thead>";
            echo "<tbody>";
            foreach ($priority_records as $rec)
            {
                echo "<tr>";
                    echo "<td>".$rec->id."</td>";
                    echo "<td> <a title=\"".$rec->description."\">".$rec->attribute."</a></td>";
                    echo "<td>
                            <input class=\"checkbox\" type=\"hidden\" value=\"".$rec->attribute."\"name=\"check_list9[".$rec->id."]\">
                            <input class=\"checkbox\" type=\"checkbox\" value=1 name=\"check_list9[".$rec->id."]\"></td>";
                echo "</tr>";
            }
            echo "</tbody>";
        ?>
        </table>
    </div>
    <br class="clearboth">
    <br>
    <input type="submit" class="btn btn-info" value="Assess">
</form>

<?php echo form_close(); ?>
