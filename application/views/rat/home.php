<?php echo form_open('rat/result'); ?>

    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12">
                <table class="datatable table table-condensed table-bordered">
                    <thead>
                        <tr>
                            <th > FSM chain </th>
                            <th > Regulation on Paper </th>
                            <th > Implementation Activities<br> (Monitoring, Enforcement, Institutional Relation, Resources Plan) </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="alignCenter width10">
                                Construction/Containment
                                <img id="logoImage" src="<?php echo base_url(); ?>assets/image/construction.png">
                            </td>
                            <td class="width45">
                                <table class="datatable table table-condensed">
                                    <tbody>
                                        <tr>
                                            <?php foreach ($construction_records as $rec) { ?>
                                            <tr>
                                                <td>
                                                    <label>
                                                        <input type="hidden" value=<?php echo "\"$rec->attribute\""; ?>name=<?php echo "\"check_list1[".$rec->id."]\""; ?> >
                                                        <input type="checkbox" value=1 name=<?php echo "\"check_list1[".$rec->id."]\""; ?> > <a title=<?php echo "\"$rec->description\""; ?> > <?php echo $rec->attribute; ?></a>
                                                    </label>
                                                </td>
                                            </tr>
                                            <?php } ?>
                                        <tr>
                                    </tbody>
                                </table>
                            </td>
                            <td class="width45">
                                <table class="datatable table table-condensed">
                                    <tbody>
                                        <?php foreach ($construction_act_records as $rec) { ?>
                                        <tr>
                                            <td>
                                                <label>
                                                    <input type="hidden" value=<?php echo "\"$rec->attribute\""; ?>name=<?php echo "\"check_list4[".$rec->id."]\""; ?> >
                                                    <input type="checkbox" value=1 name=<?php echo "\"check_list4[".$rec->id."]\""; ?> > <a title=<?php echo "\"$rec->description\""; ?> > <?php echo $rec->attribute; ?></a>
                                                </label>
                                            </td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td class="alignCenter width10">
                                Collection & Treatment
                                <img id="logoImage" src="<?php echo base_url(); ?>assets/image/collection.jpg">
                            </td>
                            <td class="width45">
                                <table class="datatable table table-condensed">
                                    <tbody>
                                        <tr>
                                            <?php foreach ($collection_records as $rec) { ?>
                                            <tr>
                                                <td>
                                                    <label>
                                                        <input type="hidden" value=<?php echo "\"$rec->attribute\""; ?>name=<?php echo "\"check_list2[".$rec->id."]\""; ?> >
                                                        <input type="checkbox" value=1 name=<?php echo "\"check_list2[".$rec->id."]\""; ?> > <a title=<?php echo "\"$rec->description\""; ?> > <?php echo $rec->attribute; ?></a>
                                                    </label>
                                                </td>
                                            </tr>
                                            <?php } ?>
                                        <tr>
                                    </tbody>
                                </table>
                            </td>
                            <td class="width45">
                                <table class="datatable table table-condensed">
                                    <tbody>
                                        <?php foreach ($collection_act_records as $rec) { ?>
                                        <tr>
                                            <td>
                                                <label>
                                                    <input type="hidden" value=<?php echo "\"$rec->attribute\""; ?>name=<?php echo "\"check_list5[".$rec->id."]\""; ?> >
                                                    <input type="checkbox" value=1 name=<?php echo "\"check_list5[".$rec->id."]\""; ?> > <a title=<?php echo "\"$rec->description\""; ?> > <?php echo $rec->attribute; ?></a>
                                                </label>
                                            </td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td class="alignCenter width10">
                                Treatment/Disposal/Reuse
                                <img id="logoImage" src="<?php echo base_url(); ?>assets/image/treatment.jpg">
                            </td>
                            <td class="width45">
                                <table class="datatable table table-condensed">
                                    <tbody>
                                        <tr>
                                            <?php foreach ($treatment_records as $rec) { ?>
                                            <tr>
                                                <td>
                                                    <label>
                                                        <input type="hidden" value=<?php echo "\"$rec->attribute\""; ?>name=<?php echo "\"check_list3[".$rec->id."]\""; ?> >
                                                        <input type="checkbox" value=1 name=<?php echo "\"check_list3[".$rec->id."]\""; ?> > <a title=<?php echo "\"$rec->description\""; ?> > <?php echo $rec->attribute; ?></a>
                                                    </label>
                                                </td>
                                            </tr>
                                            <?php } ?>
                                        <tr>
                                    </tbody>
                                </table>
                            </td>
                            <td class="width45">
                                <table class="datatable table table-condensed">
                                    <tbody>
                                        <?php foreach ($treatment_act_records as $rec) { ?>
                                        <tr>
                                            <td>
                                                <label>
                                                    <input type="hidden" value=<?php echo "\"$rec->attribute\""; ?>name=<?php echo "\"check_list6[".$rec->id."]\""; ?> >
                                                    <input type="checkbox" value=1 name=<?php echo "\"check_list6[".$rec->id."]\""; ?> > <a title=<?php echo "\"$rec->description\""; ?> > <?php echo $rec->attribute; ?></a>
                                                </label>
                                            </td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <br>
        <div id="table-header" class="row">
            <div class="col-xs-12 alignCenter">
                <div id="table-head-text">
                    Implementation Activities (Continuing...)<br>
                    (Monitoring, Enforcement, Institutional Relation, Resources Plan)
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-6">
                <table class="datatable table table-condensed table-bordered">
                    <tbody>
                        <tr>
                            <td class="alignCenter width10">
                                Other activities (Awareness, Education, Management)
                                <img id="logoImage" src="<?php echo base_url(); ?>assets/image/activities.jpg">
                            </td>
                            <td class="width40">
                                <table class="datatable table table-condensed">
                                    <tbody>
                                        <tr>
                                            <?php foreach ($other_act_records as $rec) { ?>
                                            <tr>
                                                <td>
                                                    <label>
                                                        <input type="hidden" value=<?php echo "\"$rec->attribute\""; ?>name=<?php echo "\"check_list7[".$rec->id."]\""; ?> >
                                                        <input type="checkbox" value=1 name=<?php echo "\"check_list7[".$rec->id."]\""; ?> > <a title=<?php echo "\"$rec->description\""; ?> > <?php echo $rec->attribute; ?></a>
                                                    </label>
                                                </td>
                                            </tr>
                                            <?php } ?>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="col-xs-6">
                <div class="row">
                    <table class="datatable table table-condensed table-bordered">
                        <tbody>
                            <tr>
                                <td class="alignCenter width10">
                                    Affordability to Pay
                                    <img id="logoImage" src="<?php echo base_url(); ?>assets/image/affordability.jpg">
                                </td>
                                <td class="width40">
                                    <table class="datatable table table-condensed">
                                        <tbody>
                                            <tr>
                                                <?php foreach ($affortability_records as $rec) { ?>
                                                <tr>
                                                    <td>
                                                        <label>
                                                            <input type="hidden" value=<?php echo "\"$rec->attribute\""; ?>name=<?php echo "\"check_list8[".$rec->id."]\""; ?> >
                                                            <input type="checkbox" value=1 name=<?php echo "\"check_list8[".$rec->id."]\""; ?> > <a title=<?php echo "\"$rec->description\""; ?> > <?php echo $rec->attribute; ?></a>
                                                        </label>
                                                    </td>
                                                </tr>
                                                <?php } ?>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="row">
                    <table class="datatable table table-condensed table-bordered">
                        <tbody>
                            <tr>
                                <td class="alignCenter width10">
                                    Priority
                                    <img id="logoImage" src="<?php echo base_url(); ?>assets/image/priority.jpg">
                                </td>
                                <td class="width40">
                                    <table class="datatable table table-condensed">
                                        <tbody>
                                            <tr>
                                                <?php foreach ($priority_records as $rec) { ?>
                                                <tr>
                                                    <td>
                                                        <label>
                                                            <input type="hidden" value=<?php echo "\"   $rec->attribute\""; ?>name=<?php echo "\"check_list9[".$rec->id."]\""; ?> >
                                                            <input type="checkbox" value=1 name=<?php echo "\"check_list9[".$rec->id."]\""; ?> > <a title=<?php echo "\"$rec->description\""; ?> > <?php echo $rec->attribute; ?></a>
                                                        </label>
                                                    </td>
                                                </tr>
                                                <?php } ?>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <input type="submit" class="btn btn-info" value="Assess">
    </div>

<?php echo form_close(); ?>
