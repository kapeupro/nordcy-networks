<?php

session_start();

include ('inc/headerdash.php')
?>



        <div id="tableau">
            <table id="tableau_logs">
                <div class="table_div">
                    <thead class="head_table">
                        <tr>
                            <th>ID</th>
                            <th>Date</th>
                            <th>Version</th>
                            <th>HeaderLenght</th>
                            <th>Service</th>
                            <th>Identification</th>
                            <th>Status</th>
                            <th>Flags Code</th>
                            <th>TTL</th>
                            <th>Checksum Status</th>
                            <th>Checksum Code</th>
                            <th>Header Checksum</th>
                            <th>Ip From</th>
                            <th>Ip Dest</th>
                        </tr>
                    </thead>

                <tbody id="datainsert" class="body_table">
                        
                </tbody>

            </div>
        </table>
    </div>




<?php include ('footer.php');
