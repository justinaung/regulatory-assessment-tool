<?php echo form_open('index.php/rat/result'); ?>

<form method="post">
    <div class="tables_container">
        <table border=1 class="table">
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
            foreach ($construction_records as $rec)
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
    </div>
    <input type="submit" class="btn btn-info" value="Assess">
</form>

<?php echo form_close(); ?>
<script type="text/javascript">
    // if (document.getElementByName("check").checked) {
    // document.getElementById("checkHidden").disabled = false;
    // }
    // $("input:checkbox[name=checklist[]]:checked").each(functionJ())
    // {
    //
    // }
    // $('input[type="checkbox"]').on('change', function(e))
    // {
    //     if($(this).prop('checked'))
    //     {
    //         $(this).next().val(1);
    //     }
    //     else
    //     {
    //
    //     }
    // }
</script>
