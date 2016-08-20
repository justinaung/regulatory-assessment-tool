<?php
    echo form_open('index.php/rat/result');
    echo "Records from construction";

    foreach ($records as $rec) {
        echo $rec->attribute."   ".$rec->checked."<br/>";
    }
?>

<form method="post">
    <div class="tables_container">
        <table border=1 class="table">
            <!--
                Construction
            -->
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
                        <td>
                            <a title="The regulation should inform the required information for applying construction permit from the applicants.
                                      Application fee (required or not) (if require, specify amount), Design of toilet facilities with the stamp of professional engineer or can request designated organization for constructionName, ID number and copy of household list document, Design of toilet facilities with the stamp of professional engineer or can request designated organization for construction, with of the road in front of building.
                                      Drainage for fluid effluent, Estimated date of completion for construction, e.t.c.">
                                      Permit application for construction toilet facilities
                            </a>
                        </div>
                        </td>
                        <td>
                            <input class="messageCheckbox" type="hidden" value="Permit application for construction toilet facilities" name="check_list[]">
                            <input class="messageCheckbox" type="checkbox" value=1 name="check_list[]">
                        </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>
                        Building codes for the toilet facilities
                    </td>
                    <td>
                        <input class="messageCheckbox" type="hidden" value="Building codes for the toilet facilities" name="check_list[]">
                        <input class="messageCheckbox" type="checkbox" value=1 name="check_list[]">
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Building codes for the drainage facilities</td>
                    <td>
                        <input class="messageCheckbox" type="hidden" value="Building codes for the drainage facilities" name="check_list[]">
                        <input class="messageCheckbox" type="checkbox" value=1 name="check_list[]">
                    </td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Maintainance of the drainage facilities</td>
                    <td>
                        <input class="messageCheckbox" type="hidden" value="Maintainance of the drainage facilities" name="check_list[]">
                        <input class="messageCheckbox" type="checkbox" value=1 name="check_list[]">
                    </td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>
                        <a title="To check the mentioned information in the application form is correct or not and field survey after construction and providing certificate for completion.">
                                Inspection and certification
                        </a>
                    </td>
                    <td>
                        <input class="messageCheckbox" type="hidden" value="Inspection and certification" name="check_list[]">
                        <input class="messageCheckbox" type="checkbox" value=1 name="check_list[]">
                    </td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>
                        <a title="The regulation should specify the penalty if the information in the application is different from the application and the penalty for completion construction if the toilet facility design differ from the application.
                                    If someone miss to apply permit.
                                    Any the same action that make differ from the regulation.
                                    It should be remarked that how to pay the penalty fee and getting receipts.">
                                    Pernal code and fee for the construction process
                        </a>
                    </td>
                    <td>
                        <input class="messageCheckbox" type="hidden" value="Pernal code and fee for the construction process" name="check_list[]">
                        <input class="messageCheckbox" type="checkbox" value=1 name="check_list[]">
                    </td>
                </tr>
            </tbody>
            <!--
                Collection & Transportation
            -->
            <thead>
                <tr>
                    <th>II</th>
                    <th>Collection & transportation</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                        <td>
                            <a title="The regulation should clearly mention about the collection application method with contact address and phone number, fax number and website according to the specified application method.
                                      It should also include the required information from the applicants such as Name, the detail address, and contact number.
                                      Moreover, the estimated service time should be informed in the regulation (for example, one day after application, the service will be provided.)
                                      If the regulation set as periodic collection service from the providers, it should be clearly the schedule for each area.">
                            Collection application for service / Periodic collection from service providers
                            </a>
                        </td>
                    <td>
                        <input class="messageCheckbox" type="hidden" value="Collection application for service / Periodic collection from service providers" name="check_list[]">
                        <input class="messageCheckbox" type="checkbox" value=1 name="check_list[]">
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>
                        <a title="It should keep a robust database of all owners/administrators of buildings, facilities and structures who have desludged their septic tanks, those that are inaccessible, those that do not have septic tanks, and those that do not have water sealed toilets, and other data that may be deemed necessary.">
                        Robust database (for accessibility of the service
                        </a>
                    </td>
                    <td>
                        <input class="messageCheckbox" type="hidden" value="Robust database (for accessibility of the service" name="check_list[]">
                        <input class="messageCheckbox" type="checkbox" value=1 name="check_list[]">
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>
                        <a title="The information about method for application and approval, the license period and fee, the license extension, the collection truck registration, the specification for disposal and treatment, monitoring and checking the collection and transportation process, monitoring and checking treatment and disposal process of the licensed organizations, and  the penalty for not following the regulations should be mentioned.">
                        Specification for license & permit for collection and transportation
                        </a>
                    </td>
                    <td><input class="messageCheckbox" type="checkbox" value=1 name="check_list2[]"></td>
                </tr>
                <tr>
                   <td>4</td>
                    <td>
                        <a title="3-5 years regular desludging should be regulated for every on-site sanitation facilities.
                                  Some septic tank are bigger than in need and no full in 8-10 years or more.
                                  In such case, solid substances gather in the septic tank and the processing efficiency / capacity of the septic tank reduces.
                                  The quality of BOD in the effluent water flowing from such septic tanks is more, which can affect the health of the persons coming in contact with it.
                                  Also, such non-treated effluent water is directly disposed off through drainages that run along the roads.">
                        Mandatory desludging
                        </a>
                    </td>
                    <td><input class="messageCheckbox" type="checkbox" value=1 name="check_list2[]"></td>
                </tr>
                <tr>
                    <td>5</td>
                     <td>
                         <a title="The collection and transportation fee should be clearly defined in the regulation.">
                         Collection and transportation fee
                         </a>
                     </td>
                    <td><input class="messageCheckbox" type="checkbox" value=1 name="check_list2[]"></td>
                </tr>
                <tr>
                    <td>6</td>
                     <td>
                         <a title="Currently avaliable and practising collection methods should be clearly mentioned.">
                         Collection methods
                         </a>
                     </td>
                    <td><input class="messageCheckbox" type="checkbox" value=1 name="check_list2[]"></td>
                </tr>
                <tr>
                    <td>7</td>
                     <td>
                         <a title="All of the collection truck must be registered and the registered truck should specify with the information such as:
                                    The line that “ONLY FOR FECAL SLUDGE COLLECTION, name of organization in capital”
                                    Truck number
                                    The tools box for the truck
                                    Fecal sludge measuring level
                                    Petroleum tank
                                    Gauge and suction controller
                                    FS truck
                                    Truck engine">
                         Registration & Specification for collection truck
                         </a>
                     </td>
                    <td><input class="messageCheckbox" type="checkbox" value=1 name="check_list2[]"></td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>
                        <a title="The protection measure for the sanitation workers should be clearly regulated and to be provided by authorized organizations.
                                  It should be monitored and should mention about the penalty.">
                        Protection measure
                    </td>
                    <td><input class="messageCheckbox" type="checkbox" value=1 name="check_list2[]"></td>
                </tr>
                <tr>
                    <td>9</td>
                    <td>
                        <a title="The appropriated specific period that the collection trucks will be maintained should be mentioned in the regulations.">
                        Maintaining the collection truck
                    </td>
                    <td><input class="messageCheckbox" type="checkbox" value=1 name="check_list2[]"></td>
                </tr>
                <tr>
                    <td>10</td>
                    <td>
                        Route logistic database/ road maps
                    </td>
                    <td><input class="messageCheckbox" type="checkbox" value=1 name="check_list2[]"></td>
                </tr>
                <tr>
                    <td>11</td>
                    <td>
                        <a title="If there is trasfer station, the location should be clearly mentioned.">
                        Location of the transfer station
                    </td>
                    <td><input class="messageCheckbox" type="checkbox" value=1 name="check_list2[]"></td>
                </tr>
                <tr>
                    <td>12</td>
                    <td>
                        <a title="The manifest form also should be described in the regulation and in this form, Name and address of the applicant, Date and time of the collection, Source and amount of FS, the name and address of the collected organization, type and number of vehicle, and name and signature of the driver should be included.">
                        Manifest form
                    </td>
                    <td><input class="messageCheckbox" type="checkbox" value=1 name="check_list2[]"></td>
                </tr>
                <tr>
                    <td>13</td>
                    <td>
                        <a title="The information that will be monitored should be mentioned in the regulation.
                              The drivers must sign in the record information every route of collection with the time of leaving from the domain and entry time to the disposal and treatment site.
                              The manifest form should be carried and ask the householders to sign.
                              The household should be able to complain the collection process to the related organization.
                              The collection trucks maintenance and registration should be monitored as well.">
                        Monitoring for collection and transportation process
                    </td>
                    <td><input class="messageCheckbox" type="checkbox" value=1 name="check_list2[]"></td>
                </tr>
                <tr>
                    <td>14</td>
                    <td>
                        <a title="The penalty should be clearly defined for the unlicensed organizations, the unlicensed collection tucks, the illegal disposal and treatment, the licensed organizations that does not follow the regulations, the illegal dumping, the sanitation workers and the householders who encourage the illegal collection and disposal/treatment.">
                        Penal code for collection and transportation process
                    </td>
                    <td><input class="messageCheckbox" type="checkbox" value=1 name="check_list2[]"></td>
                </tr>
            </tbody>
            <!--
                Treatment and disposal/reuse
            -->
            <thead>
                <tr>
                    <th>III</th>
                    <th>Treatment & disposal/reuse</th>
                    <th></th>
                </tr>
            </thead>
                <tr>
                    <td>1</td>
                    <td>
                        <a title="The detail design that will operate collected FS should be clearly indicated, also the technology name, the capacity, and the location.">
                            Design codes for treatment technology
                        </a>
                    </td>
                    <td><input class="messageCheckbox" type="checkbox" value=1 name="check_list3[]"></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>
                        Effluent standard
                    </td>
                    <td><input class="messageCheckbox" type="checkbox" value=1 name="check_list3[]"></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>
                        <a title="The appropriate by-product and reuse product standard should be indicated in the regulations and the reuse products should have the mark or sign approving that the product has checked for the standard.">
                            By-product and reuse product standard
                        </a>
                    </td>
                    <td><input class="messageCheckbox" type="checkbox" value=1 name="check_list3[]"></td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>
                        <a title="The location of the disposal should be announced in the regulation and the disposal site should mention the odour control and insect control if it is close to the residential area and if it is far away from the city, it should be mentioned about transfer station.">
                            Specification for disposal site
                        </a>
                    </td>
                    <td><input class="messageCheckbox" type="checkbox" value=1 name="check_list3[]"></td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>
                        Health risk assessment for by-products and reuse products
                    </td>
                    <td><input class="messageCheckbox" type="checkbox" value=1 name="check_list3[]"></td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>
                        <a title="Minimum hygiene facilities at the disposal site should be mandated strictly in the regulation for the stuff running in the side and working collection and transportation.">
                            Hygiene facilities at the disposal site
                    </td>
                    <td><input class="messageCheckbox" type="checkbox" value=1 name="check_list3[]"></td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>
                        <a title="The regular inspection and surprised check at treatment and disposal site, the quality of reuse products should be regulated.
                                    Also every treatment site should have the certificate of approval.">
                                    Inspection and certification for treament and disposal/reuse
                    </td>
                    <td><input class="messageCheckbox" type="checkbox" value=1 name="check_list3[]"></td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>
                        Penal codes for treatment and disposal/reuse
                    </td>
                    <td><input class="messageCheckbox" type="checkbox" value=1 name="check_list3[]"></td>
                </tr>
                <tr>
                    <td>9</td>
                    <td>
                        Tariff setting for treatment and disposal/reuse
                    </td>
                    <td><input class="messageCheckbox" type="checkbox" value=1 name="check_list3[]"></td>
                </tr>
                <tr>
                    <td>10</td>
                    <td>
                        <a title="The standards for the effluent and the reuse products should be monitored regulation and the period of monitoring and the method in the laboratory should be remarked.
                                    The monitoring task of the underground and surface water quality should be also mentioned.">
                                    Regular monitoring and inspection for the  standards
                    </td>
                    <td><input class="messageCheckbox" type="checkbox" value=1 name="check_list3[]"></td>
                </tr>
                <tr>
                    <td>11</td>
                    <td>
                        <a title="The recording of the entry of collections trucks with time should be revealed in the treatment/disposal site and checking with the data from the site of origin for collection.">
                            Monitoring the entry of collection trucks to the treatment/disposal site
                    </td>
                    <td><input class="messageCheckbox" type="checkbox" value=1 name="check_list3[]"></td>
                </tr>
        </table>
        <!--
            Table 2
        -->
        <table border=1 align="right" class="table">
            <!--
                Construction
            -->
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
                    <td>
                        Making survey for the types of toilet facilities within specific areas
                    </td>
                    <td><input class="messageCheckbox" type="checkbox" value=1 name="check_list4[]"></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>
                        Making survey for the accessibility depending on the types of toilets within the specific areas and to update regularly
                    </td>
                    <td><input class="messageCheckbox" type="checkbox" value=1 name="check_list4[]"></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>
                        Conducting field survey to check before construction and after completion and giving completion certificate upon application
                    </td>
                    <td><input class="messageCheckbox" type="checkbox" value=1 name="check_list4[]"></td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>
                        Conducting filed survey related with complainance from the community
                    </td>
                    <td><input class="messageCheckbox" type="checkbox" value=1 name="check_list4[]"></td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>
                        Constructing toilet facilities according to the regualtion if anyone applied to construct the toilet facilites
                    </td>
                    <td><input class="messageCheckbox" type="checkbox" value=1 name="check_list4[]"></td>
                </tr>
                <!--
                    Collection & Transportation
                -->
                <thead>
                    <tr>
                        <th>II</th>
                        <th>Collection & transportation</th>
                        <th></th>
                    <tr>
                    <tr>
                        <td>1</td>
                        <td>
                            Preparing collection route and provide service according to the application list or periodic area
                        </td>
                        <td><input class="messageCheckbox" type="checkbox" value=1 name="check_list5[]"></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>
                            Preparing car schedule not to be traffic at disposal site
                        </td>
                        <td><input class="messageCheckbox" type="checkbox" value=1 name="check_list5[]"></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>
                            Making record list of truck number, route time, driver name and time and check with treatment/disposal site
                        </td>
                        <td><input class="messageCheckbox" type="checkbox" value=1 name="check_list5[]"></td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>
                            Keeping record for the housholds that cannot access the service with the reason and find the ways how to access the service
                        </td>
                        <td><input class="messageCheckbox" type="checkbox" value=1 name="check_list5[]"></td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>
                            Collecting geospatial information for convenience of preparing collection routes
                        </td>
                        <td><input class="messageCheckbox" type="checkbox" value=1 name="check_list5[]"></td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>
                            Periodic inpection for the licensed private provider services and manage the expire date and set the criteria for license renewing process
                        </td>
                        <td><input class="messageCheckbox" type="checkbox" value=1 name="check_list5[]"></td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>
                            Conductin service evaluation survery from the customers annually
                        </td>
                        <td><input class="messageCheckbox" type="checkbox" value=1 name="check_list5[]"></td>
                    </tr>

                </thead>
                <!--
                    Treatment/disposal/reuse
                -->
                <thead>
                    <th>III</th>
                    <th>Treament/disposal/reuse</th>
                    <th></th>
                </thead>
                <tr>
                    <td>1</td>
                    <td>
                        Making record list the entry of collection trucks to the treamnet/disposal site and checking with the list from the collection and transportation
                    </td>
                    <td><input class="messageCheckbox" type="checkbox" value=1 name="check_list6[]"></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>
                        Managing the fecal sludge treatment operation
                    </td>
                    <td><input class="messageCheckbox" type="checkbox" value=1 name="check_list6[]"></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>
                        Monitoring the effluent standard, by-product and reuse product standard
                    </td>
                    <td><input class="messageCheckbox" type="checkbox" value=1 name="check_list6[]"></td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>
                        Monitoring the quality of underground water and surface water nearby the treatment/disposal site
                    </td>
                    <td><input class="messageCheckbox" type="checkbox" value=1 name="check_list6[]"></td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>
                        Setting/upgrading and specifying the appropriate standards
                    </td>
                    <td><input class="messageCheckbox" type="checkbox" value=1 name="check_list6[]"></td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>
                        Managing the reuse product markertr and preparing revenue database
                    </td>
                    <td><input class="messageCheckbox" type="checkbox" value=1 name="check_list6[]"></td>
                </tr>

            </tbody>
        </table>
        <br class="clearboth">
        <br class="clearboth">
        <hr>
        <br class="clearboth">
        <table border=1 class="table">
            <!--
                Other activities
            -->
            <thead>
                <th>IV</th>
                <th>Other activities (Awareness, Education, Management)</th>
                <th></th>
            </thead>
            <tr>
                <td>1</td>
                <td>
                    To educate people about FSM and the current regulation by preparing IEC(Information, Education, & Communication) materials.
                </td>
                <td><input class="messageCheckbox" type="checkbox" value=1 name="check_list7[]"></td>
            </tr>
            <tr>
                <td>2</td>
                <td>
                    Enhancing the advertisement and announcement of FSM to increase the awareness of the people
                </td>
                <td><input class="messageCheckbox" type="checkbox" value=1 name="check_list7[]"></td>
            </tr>
            <tr>
                <td>3</td>
                <td>
                    Taking actions if there is anything differ from regulation and managing and collecting penalty, fee and charges
                </td>
                <td><input class="messageCheckbox" type="checkbox" value=1 name="check_list7[]"></td>
            </tr>
            <tr>
                <td>4</td>
                <td>
                    Managing the budget plan
                </td>
                <td><input class="messageCheckbox" type="checkbox" value=1 name="check_list7[]"></td>
            </tr>
            <tr>
                <td>5</td>
                <td>
                    Coordinating with other related professional organizations
                </td>
                <td><input class="messageCheckbox" type="checkbox" value=1 name="check_list7[]"></td>
            </tr>
            <tr>
                <td>6</td>
                <td>
                    Updating the regulation and traffic setting according to the time and circumstance of a situation
                </td>
                <td><input class="messageCheckbox" type="checkbox" value=1 name="check_list7[]"></td>
            </tr>
            <tr>
                <td>7</td>
                <td>
                    Managing the resource requirement within the specific areas
                </td>
                <td><input class="messageCheckbox" type="checkbox" value=1 name="check_list7[]"></td>
            </tr>
            <tr>
                <td>8</td>
                <td>
                    Organizing the committee council and inspecting and monitoring the performance of the authorized organization in FSM
                </td>
                <td><input class="messageCheckbox" type="checkbox" value=1 name="check_list7[]"></td>
            </tr>
            <tr>
                <td>9</td>
                <td>
                    Organizing the committee council and tring to encourage the participation of external experts to polish the national strategies, plans, policy and regulations
                </td>
                <td><input class="messageCheckbox" type="checkbox" value=1 name="check_list7[]"></td>
            </tr>
            <tr>
                <td>10</td>
                <td>
                    Preparing regular training and education campaign for the stuff and local community
                </td>
                <td><input class="messageCheckbox" type="checkbox" value=1 name="check_list7[]"></td>
            </tr>
        </table>
        <table border="1" class="table">
            <!--
                Affordability to pay
            -->
            <thead>
                <th>V</th>
                <th>Affordability to Pay</th>
                <th></th>
            </thead>
            <tr>
                <td>1</td>
                <td>
                    The current service fee is not more than 5% of the average income of household.
                </td>
                <td><input class="messageCheckbox" type="checkbox" value=1 name="check_list8[]"></td>
            </tr>
            <!--
                Priority of FSM
            -->
            <thead>
                <th>VI</th>
                <th>Priority of FSM in selected area</th>
                <th></th>
            </thead>
            <tr>
                <td>1</td>
                <td>
                    Policies
                </td>
                <td><input class="messageCheckbox" type="checkbox" value=1 name="check_list9[]"></td>
            </tr>
            <tr>
                <td>2</td>
                <td>
                    Strategies
                </td>
                <td><input class="messageCheckbox" type="checkbox" value=1 name="check_list9[]"></td>
            </tr>
            <tr>
                <td>3</td>
                <td>
                    Sector Development Plans
                </td>
                <td><input class="messageCheckbox" type="checkbox" value=1 name="check_list9[]"></td>
            </tr>
            <tr>
                <td>4</td>
                <td>
                    City-level/Municipal level regulations/ordinance
                </td>
                <td><input class="messageCheckbox" type="checkbox" value=1 name="check_list9[]"></td>
            </tr>
        </table>
    </div>
    <br class="clearboth">
    <br>
    <input type="submit" class="btn btn-info" value="Assess">
</form>
<script type="text/javascript">
    // if (document.getElementByName("check").checked) {
    // document.getElementById("checkHidden").disabled = false;
    // }
    $("input:checkbox[name=checklist[]]:checked").each(functionJ())
    {

    }
</script>
<?php echo form_close(); ?>
