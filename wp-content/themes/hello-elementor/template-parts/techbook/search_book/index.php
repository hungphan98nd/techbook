<?php
/**
 * The template for displaying footer.
 *
 * @package HelloElementor
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}


$products = get_products();
?>


<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/template-parts/techbook/search_book/index.css">

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>


<script src="<?php echo get_template_directory_uri(); ?>/template-parts/techbook/search_book/index.js"></script>


<div class="container-fullwidth">
    <div class="container-boxed">
        <div class=" title-home">
            <p>Home > Books > <span style="color: #1E00AE;">Advanced search</span></p>
        </div>
    </div>

    <div class="container-boxed-banner">
        <div class="titile-banner">Search Books</div>
    </div>

    <div class="container-boxed-form">
    <div class="search-box">
        <h2>Advanced search</h2>
        <div class="search-panel">
            <div class="search-table-1">
                <div class="input-field">
                    <label for="ref-number">Code</label>
                    <input type="text" id="ref-number" placeholder="Example: ASME">
                </div>

                <div class="input-field">
                    <label for="std-title">Books Title</label>
                    <input type="text" id="std-title" placeholder="Example: Quality management systems - Requirements">
                </div>

                <!-- Select Publisher -->
                <div class="input-field">
                        <label for="select-publisher">Publisher</label>
                        <select id="select-publisher">
                            <option value="">All</option>
                            <?php
                            
                            $publishers = array_unique(array_column($products, 'publisher'));
                            foreach ($publishers as $publisher): ?>
                                <option value="<?php echo esc_attr($publisher); ?>"><?php echo esc_html($publisher); ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                <div class="input-field">
                        <label for="select-ics">Industry</label>
                        <select id="select-ics">
                            <option value="">All</option>
                            <?php
                           
                            $industries = array_unique(array_column($products, 'industry'));
                            foreach ($industries as $industry): ?>
                                <option value="<?php echo esc_attr($industry); ?>"><?php echo esc_html($industry); ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>

            </div>


            <div class="search-table-2">
            <div class="input-field">
                <label for="pub-year-min">Published year</label>
                <div class="year-selection">
                    <select id="pub-year-min">
                        <option value="">Min to</option>
                        <?php
                        // Lấy năm hiện tại
                        $currentYear = date('Y');

                        // Hiển thị các năm từ 2000 đến năm hiện tại
                        for ($year = 2000; $year <= $currentYear; $year++): ?>
                            <option value="<?php echo $year; ?>"><?php echo $year; ?></option>
                        <?php endfor; ?>
                    </select>

                    <select id="pub-year-max">
                        <option value="">Max to</option>
                        <?php
                        // Hiển thị các năm từ 2000 đến năm hiện tại
                        for ($year = 2000; $year <= $currentYear; $year++): ?>
                            <option value="<?php echo $year; ?>"><?php echo $year; ?></option>
                        <?php endfor; ?>
                    </select>
                </div>
            </div>



                <div class="input-field">
                    <label for="replace-to-text">Price (USD)</label>                 
                    <div class="input-container">
                        <input type="text" id="min-input" placeholder="Min to">
                        <input type="text" id="max-input" placeholder="Max to">
                    </div>
                </div>

                <div class="input-field">
                    <label for="replace-by-text">ISBN (International Standard Book Number)</label>
                    <input type="text" id="ISBN-text" placeholder="Text">
                </div>

                <div class="input-field">
                    <label for="replace-by-text">Author</label>
                    <input type="text" id="Author-text" placeholder="Text">
                </div>

            </div>

            <div class="search-table-3">
                <div class="input-field">
                        <label for="select-lang">Languages</label>
                        <select id="select-lang">
                            <option value="" selected disabled>Select Language</option> <!-- Tùy chọn trống -->
                            <option>English</option>
                            <option>VietNam</option>
                            <option>China</option>
                            <option>Japan</option>
                        </select>
                    </div>

                <div class="input-field keyword-field">
                    <label for="keyword-search">Keyword</label>
                    <textarea id="keyword-search" placeholder="Text"></textarea>
                </div>

                <div class="action-buttons">
                    <button type="button" class="btn-refresh">
                    <img src="<?php echo home_url(); ?>/wp-content/uploads/2024/09/refresh-cw-05.svg" alt="icon" class="icon1">    
                    Refresh</button>
                    <button type="submit" class="btn-search">
                    <img src="<?php echo home_url(); ?>/wp-content/uploads/2024/09/search-md.svg" alt="icon" class="icon1">     
                    Search</button>
                </div>
            </div>
        </div>
    </div>
    </div>


    <!-- phần dưới -->
<div class="container-boxed">
    <div class="container-title">
        <p>Search results: <span id="dem-so-luong">0</span></p>
            <div class="sort-newest">
                <select id="sort-order">
                    <option value="newest">Newest</option>
                    <option value="oldest">Oldest</option>
                    <!-- Thêm các tùy chọn khác nếu cần -->
                </select>
            </div>
    </div>
    <div class="product-list">
        <?php if (!empty($products)): ?>
            <?php foreach ($products as $product): ?>
            <div class="product-item">
                <img src="<?= $product['image']; ?>" alt="Product Image" class="product-image">
                <p class="product-category"><?= $product['category']; ?></p>
                <h3 class="product-title"><?= $product['title']; ?></h3>
                <p class="product-group"><?= $product['group']; ?></p>
                <p class="product-price"><?= $product['price']; ?></p>
            </div>
            <?php endforeach; ?>
        <?php else: ?>
            <p>No products available at the moment.</p>
        <?php endif; ?>
    </div>

    


</div>