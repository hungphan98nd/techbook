<?php
/**
 * The template for displaying footer.
 *
 * @package HelloElementor
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>

<style>
.document-item {
    display: flex !important;
    justify-content: space-between;
    padding: 20px;
    background-color: #f8f9fa;
    border-radius: 8px;
    align-items: center;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    width: 99%;
    margin: 0 auto;
}
.document-item:nth-child(odd) {
    background-color: #f8f9fa; 
}



.document-item:nth-child(even) {
    background-color: #ffffff; 
}
.document-info {
    flex: 1;
}

.document-title {
    font-size: 16px;
    font-weight: 600;
    margin-bottom: 5px;
}

.document-description {
    font-size: 14px;
    margin-bottom: 10px;
}

.document-meta span {
    font-size: 13px;
    display: flex;
    align-items: center;
    gap: 5px;
    margin-right: 15px;
}

.document-meta {
    display: flex;
    gap: 10px;
    flex-wrap: wrap;
}
.status-label1 {
    color: #2C2C2C !important;
    background: #D9F9F3;
    padding: 5px;
    border: 1px solid #18BEA0;
    border-radius: 32px;
    font-family: "Ford Antenna", sans-serif;
    font-size: 12px !important;
    font-weight: 400 !important;
    line-height: 22px;
}

.status-label.withdrawn {
    background-color: #FFDDD9;
    color: #2C2C2C !important;
    padding: 5px;
    border: 1px solid #FF7160;
    border-radius: 32px;
    font-family: "Ford Antenna", sans-serif;
    font-size: 12px !important;
    font-weight: 400 !important;
    line-height: 22px;
}

.document-action img {
    width: 17px;
    height: 17px;
}

.document-action {
    display: flex;
    justify-content: center;
    align-items: center;
    width: 40px;
    height: 40px;
    background-color: #ffffff;
    border-radius: 50%;
    box-shadow: 0px 1px 5px rgba(0, 0, 0, 0.1);
    transition: background-color 0.2s ease;
}

/* h2.title {
    font-family: Ford Antenna;
    font-size: 20px;
    font-weight: 600;
    line-height: 22px;
    color: #2C2C2C;
}

p.content {
    font-family: Ford Antenna;
    font-size: 14px;
    font-weight: 300;
    line-height: 22px;
    color: #2C2C2C;
}

.scope, .preface {
    padding: 20px;
} */
.status-label {
    color: #2C2C2C !important;
    background: #D9F9F3;
    padding: 5px;
    border: 1px solid #18BEA0;
    border-radius: 32px;
    font-family: "Ford Antenna", sans-serif;
    font-size: 12px !important;
    font-weight: 400 !important;
    line-height: 22px;
}
</style>


<div class="document-item ">
    <div class="document-info">
        <h3 class="document-title"><?php echo $document['title']; ?></h3>
        <p class="document-description"><?php echo $document['description']; ?></p>
        <div class="document-meta">
            <span>
                <img src="<?php echo home_url(); ?>/wp-content/uploads/2024/09/calendar.svg" alt="Date Icon">
                Published Date: <?php echo $document['published_date']; ?>
            </span>
            <span>
                <img src="<?php echo home_url(); ?>/wp-content/uploads/2024/09/book-square.svg" alt="Pages Icon">
                Pages: <?php echo $document['pages']; ?>
            </span>
            <span>
                <img src="<?php echo home_url(); ?>/wp-content/uploads/2024/09/clock.svg" alt="Status Icon">
                Status: 
                <span class="status-label <?php echo ($document['status'] == 'Withdrawn') ? 'withdrawn' : ''; ?>">
                    <?php if ($document['status'] == 'Withdrawn') : ?>
                        <img src="<?php echo home_url(); ?>/wp-content/uploads/2024/09/calendar-minus-02.svg" alt="Status Icon" class="status-icon1"> Withdrawn
                    <?php else : ?>
                        <img src="<?php echo home_url(); ?>/wp-content/uploads/2024/09/Icon-7.svg" alt="Status Icon" class="status-icon1"> Most recent
                    <?php endif; ?>
                </span>
            </span>
        </div>
    </div>
    <div class="document-action">
        <img src="<?php echo home_url(); ?>/wp-content/uploads/2024/09/Icon-8.svg" alt="Arrow Icon">
    </div>
</div>