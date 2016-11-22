<div class="jplist-panel col-lg-12">

    <!-- sort dropdown -->
    <div
            class="jplist-drop-down"
            data-control-type="sort-drop-down"
            data-control-name="sort"
            data-control-action="sort">

        <ul>
            <li><span data-path="default">Sort by</span></li>
            <li><span data-path=".name" data-order="asc" data-type="text">Title A-Z</span></li>
            <li><span data-path=".name" data-order="desc" data-type="text">Title Z-A</span></li>
            <li><span data-path=".id" data-order="asc" data-type="text">ID 0-9</span></li>
            <li><span data-path=".id" data-order="desc" data-type="text">ID 9-0</span></li>
        </ul>
    </div>


    <div class="text-filter-box">

        <i class="fa fa-search  jplist-icon"></i>

        <!--[if lt IE 10]>
        <div class="jplist-label">Filter by Model:</div>
        <![endif]-->

        <input data-path=".name" type="text" value="" placeholder="Filter by Name" data-control-type="textbox" data-control-name="model-text-filter" data-control-action="filter">
    </div>

    <div class="text-filter-box">

        <i class="fa fa-search  jplist-icon"></i>

        <!--[if lt IE 10]>
        <div class="jplist-label">Filter by ID:</div>
        <![endif]-->

        <input class="customized-input" data-path=".id" type="number" value="" placeholder="Filter by ID" data-control-type="textbox" data-control-name="id-text-filter" data-control-action="filter">
    </div>

</div>