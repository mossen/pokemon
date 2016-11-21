<div class="box jplist">


    <!-- panel -->
    <div class="jplist-panel box panel-top">

        <!-- reset button -->
        <button type="button" class="jplist-reset-btn" data-control-type="reset" data-control-name="reset" data-control-action="reset">
            Reset &nbsp;<i class="fa fa-share"></i>
        </button>

        <!-- sort dropdown -->
        <div class="jplist-drop-down" data-control-type="sort-drop-down" data-control-name="sort" data-control-action="sort">
            <div class="jplist-dd-panel">Sort by</div>

            <ul style="display: none;">
                <li class="active"><span data-path="default">Sort by</span></li>
                <li><span data-path=".name" data-order="asc" data-type="text">Name A-Z</span></li>
                <li><span data-path=".name" data-order="desc" data-type="text">Name Z-A</span></li>
                <li><span data-path=".id" data-order="asc" data-type="number">ID 0-9</span></li>
                <li><span data-path=".id" data-order="desc" data-type="number">ID 9-0</span></li>
            </ul>
        </div>

        <!-- filter by name -->
        <div class="text-filter-box">

            <i class="fa fa-search  jplist-icon"></i>

            <!--[if lt IE 10]>
            <div class="jplist-label">Filter by Name:</div>
            <![endif]-->

            <input data-path=".name" type="text" value="" placeholder="Filter by Name" data-control-type="textbox"
                   data-control-name="model-text-filter" data-control-action="filter">
        </div>

        <!-- filter by Manufacturer -->
        <div class="text-filter-box">

            <i class="fa fa-search  jplist-icon"></i>

            <!--[if lt IE 10]>
            <div class="jplist-label">Filter by type:</div>
            <![endif]-->

            <input data-path=".manufacturer" type="text" value="" placeholder="Filter by Type" data-control-type="textbox" data-control-name="manufacturer-text-filter" data-control-action="filter">
        </div>

        <!-- filter by Id -->
        <div class="text-filter-box">

            <i class="fa fa-search  jplist-icon"></i>

            <!--[if lt IE 10]>
            <div class="jplist-label">Filter by ID:</div>
            <![endif]-->

            <input data-path=".id" type="number" value="" placeholder="Filter by ID" data-control-type="textbox" data-control-name="engine-text-filter" data-control-action="filter">
        </div>

        <!-- filter by Transmission -->
        <div class="text-filter-box">

            <i class="fa fa-search  jplist-icon"></i>

            <!--[if lt IE 10]>
            <div class="jplist-label">Filter by Transmission:</div>
            <![endif]-->

            <input data-path=".transmission" type="text" value="" placeholder="Filter by Transmission" data-control-type="textbox" data-control-name="transmission-text-filter" data-control-action="filter">
        </div>


        <!-- pagination results -->
        <div class="jplist-label" data-type="Page {current} of {pages}" data-control-type="pagination-info" data-control-name="paging" data-control-action="paging">Page 1 of 3</div>

        <!-- pagination -->
        <div class="jplist-pagination" data-control-type="pagination" data-control-name="paging" data-control-action="paging"><div class="jplist-pagingprev jplist-hidden" data-type="pagingprev"><button type="button" class="jplist-first" data-number="0" data-type="first">«</button><button type="button" class="jplist-prev" data-type="prev" data-number="0">‹</button></div><div class="jplist-pagingmid" data-type="pagingmid"><div class="jplist-pagesbox" data-type="pagesbox"><button type="button" data-type="page" class="jplist-current" data-active="true" data-number="0">1</button> <button type="button" data-type="page" data-number="1">2</button> <button type="button" data-type="page" data-number="2">3</button> </div></div><div class="jplist-pagingnext" data-type="pagingnext"><button type="button" class="jplist-next" data-type="next" data-number="1">›</button><button type="button" class="jplist-last" data-type="last" data-number="2">»</button></div></div>
    </div>


    <!-- data -->



    </div>

</div>