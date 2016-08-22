<?php echo form_open('rat/result'); ?>

    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12">
                <table class="datatable table table-condensed table-bordered">
                    <thead>
                        <tr>
                            <th class="alignCenter width10"> FSM chain </th>
                            <th class="alignCenter width45"> Regulation on Paper </th>
                            <th class="alignCenter width45"> Implementation Activities </th>
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
                                        <?php foreach ($construction_records as $rec) { ?>
                                        <tr>
                                            <td class="width45">
                                                <!-- <label> -->
                                                    <input type="hidden" value=<?php echo "\"$rec->attribute\""; ?>name=<?php echo "\"check_list1[".$rec->id."]\""; ?> >
                                                    <input type="checkbox" value=1 name=<?php echo "\"check_list1[".$rec->id."]\""; ?> > <a title=<?php echo "\"$rec->description\""; ?> > <?php echo $rec->attribute; ?></a>
                                                <!-- </label> -->
                                            </td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </td>
                            <td class="width45">
                                <table class="datatable table table-condensed">
                                    <tbody>
                                        <?php foreach ($construction_act_records as $rec) { ?>
                                        <tr>
                                            <td class="width45">
                                                <!-- <label> -->
                                                    <input type="hidden" value=<?php echo "\"$rec->attribute\""; ?>name=<?php echo "\"check_list1[".$rec->id."]\""; ?> >
                                                    <input type="checkbox" value=1 name=<?php echo "\"check_list1[".$rec->id."]\""; ?> > <a title=<?php echo "\"$rec->description\""; ?> > <?php echo $rec->attribute; ?></a>
                                                <!-- </label> -->
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
    </div>
    <input type="submit" class="btn btn-info" value="Assess">

<?php echo form_close(); ?>
