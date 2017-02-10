<?php

use app\migrations\Migration;

class m170131_155213_add_new_service_partial_on_page_table extends Migration
{
    public function safeUp()
    {
        $this->insert('page', [
            'id' => app\models\Page::PAGE_SERVICE_PARTIAL,
            'name' => 'Short Service',
            'slug' => 'short-service',
            'category' => app\models\Page::CATEGORY_PARTIAL,
            'description' => '<section class="section-padding">
            <div class="container">

              <div class="text-center mb-80">
                  <h2 class="section-title text-uppercase">What we do</h2>
                  <p class="section-sub">Quisque non erat mi. Etiam congue et augue sed tempus. Aenean sed ipsum luctus, scelerisque ipsum nec, iaculis justo. Sed at vestibulum purus, sit amet viverra diam. Nulla ac nisi rhoncus,</p>
              </div>

              <div class="row equal-height-row">
                  <div class="col-md-4 mb-30">
                      <div class="featured-item hover-outline brand-hover radius-4 equal-height-column">
                          <div class="icon">
                              <i class="material-icons colored brand-icon">&#xE3B7;</i>
                          </div>
                          <div class="desc">
                              <h2>Creative Design</h2>
                              <p>Porttitor communicate pandemic data rather than enabled niche markets neque rather than enabled niche markets neque pulvinar.</p>
                          </div>
                      </div><!-- /.featured-item -->
                  </div><!-- /.col-md-4 -->

                  <div class="col-md-4 mb-30">
                      <div class="featured-item hover-outline brand-hover radius-4 equal-height-column">
                          <div class="icon">
                              <i class="material-icons colored brand-icon">&#xE326;</i>
                          </div>
                          <div class="desc">
                              <h2>Responsive Design</h2>
                              <p>Porttitor communicate pandemic data rather than enabled niche markets neque rather than enabled niche markets neque pulvinar.</p>
                          </div>
                      </div><!-- /.featured-item -->
                  </div><!-- /.col-md-4 -->

                  <div class="col-md-4 mb-30">
                      <div class="featured-item hover-outline brand-hover radius-4 equal-height-column">
                          <div class="icon">
                              <i class="material-icons colored brand-icon">&#xE8B8;</i>
                          </div>
                          <div class="desc">
                              <h2>Flexible Page Builder</h2>
                              <p>Porttitor communicate pandemic data rather than enabled niche markets neque rather than enabled niche markets neque pulvinar.</p>
                          </div>
                      </div><!-- /.featured-item -->
                  </div><!-- /.col-md-4 -->

                  <div class="col-md-4">
                      <div class="featured-item hover-outline brand-hover radius-4 equal-height-column">
                          <div class="icon">
                              <i class="material-icons colored brand-icon">&#xE325;</i>
                          </div>
                          <div class="desc">
                              <h2>Mobile Applicaion Design</h2>
                              <p>Porttitor communicate pandemic data rather than enabled niche markets neque rather than enabled niche markets neque pulvinar.</p>
                          </div>
                      </div><!-- /.featured-item -->
                  </div><!-- /.col-md-4 -->

                  <div class="col-md-4">
                      <div class="featured-item hover-outline brand-hover radius-4 equal-height-column">
                          <div class="icon">
                              <i class="material-icons colored brand-icon">&#xE3B0;</i>
                          </div>
                          <div class="desc">
                              <h2>Professional Photography</h2>
                              <p>Porttitor communicate pandemic data rather than enabled niche markets neque rather than enabled niche markets neque pulvinar.</p>
                          </div>
                      </div><!-- /.featured-item -->
                  </div><!-- /.col-md-4 -->

                  <div class="col-md-4">
                      <div class="featured-item hover-outline brand-hover radius-4 equal-height-column">
                          <div class="icon">
                              <i class="material-icons colored brand-icon">&#xE62E;</i>
                          </div>
                          <div class="desc">
                              <h2>Moting Graphics Design</h2>
                              <p>Porttitor communicate pandemic data rather than enabled niche markets neque rather than enabled niche markets neque pulvinar.</p>
                          </div>
                      </div><!-- /.featured-item -->
                  </div><!-- /.col-md-4 -->
              </div><!-- /.row -->

            </div><!-- /.container -->
        </section>',
            'metakey' => 'Short Service Content of Art Techno Corporation',
            'metadesc' => 'We are innovative, we are creative, we provides web development and colsultant, web maintenance. We also provides about network development, problem solving and maintenance. We have training center to will somebody learn about web or network',
            'status' => 1,
            'created_at' => date('Y-m-d H:i:s'),
            'created_by' => 1,
        ]);
    }

    public function safeDown()
    {
        $this->delete('page', 'id="'.app\models\Page::PAGE_SERVICE_PARTIAL.'"');
    }
}
