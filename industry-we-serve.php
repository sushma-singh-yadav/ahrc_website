<div class="Servicesection ">
    <div class="container p-10">
        <div class="row p-5">
            <div class="col-md-12 ">
                <h4 class="text-center">Industry we serve </h4>

                <div class="row">
                    <div class="col-md-3">
                        <?php
                        $arr1 = ['IT & ITES', 'Manufacturing (all type)', 'Hospitality', 'Travel']; ?>
                        <ul class="industryUl ">
                            <?php
                            foreach ($arr1 as $arr) { ?>
                                <li><?php echo $arr; ?></li>
                            <?php } ?>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <?php
                        $arr1 = ['Fashion', 'Events', 'NGO', 'Healthcare']; ?>
                        <ul class="industryUl ">
                            <?php
                            foreach ($arr1 as $arr) { ?>
                                <li><?php echo $arr; ?></li>
                            <?php } ?>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <?php
                        $arr1 = ['Banking & finance', 'Retail', 'Automobile', 'FMCG']; ?>
                        <ul class="industryUl">
                            <?php
                            foreach ($arr1 as $arr) { ?>
                                <li><?php echo $arr; ?></li>
                            <?php } ?>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <?php
                        $arr1 = ['Construction', 'BPO', ' Engineering & technical', 'Insurance']; ?>
                        <ul class="industryUl ">
                            <?php
                            foreach ($arr1 as $arr) { ?>
                                <li><?php echo $arr; ?></li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>

                <?php $url = $_SERVER['REQUEST_URI'];
                if ($url == '/') {
                ?>
                    <div class="text-center mt-3">
                        <a class="btn btn-warning " href="/employer-corner.php">Learn More</a>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>