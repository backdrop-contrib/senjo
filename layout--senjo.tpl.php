<?php
/**
 * @file
 * Template for Senjo.
 */
?>
<div class="senjo <?php print implode(' ', $classes); ?>"<?php print backdrop_attributes($attributes); ?>>
  <div id="skip-link">
    <a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>
  </div>

  <?php if (!empty($content['header'])): ?>
    <header id="l-header" class="l-header" role="header" aria-label="<?php print t('Site header'); ?>">
      <div class="container">
        <?php print $content['header']; ?>
      </div>
    </header>
  <?php endif; ?>

  <?php if (!empty($content['top_banner']) || !empty($content['full_banner'])): ?>
    <section class="l-top-banner">
      <div class="full-container">
        <?php print $content['full_banner']; ?>
      </div>
      <div class="container">
        <?php print $content['top_banner']; ?>
      </div>
    </section>
  <?php endif; ?>

  <?php if ($messages): ?>
    <section class="l-messages container">
      <?php print $messages; ?>
    </section>
  <?php endif; ?>

  <div class="l-main-wrapper">
    <main class="main container l-container" role="main">
      <div class="page-header">
        <a id="main-content"></a>
        <?php print render($title_prefix); ?>
        <?php if ($title): ?>
          <h1 class="title" id="page-title">
            <?php print $title; ?>
          </h1>
        <?php endif; ?>
        <?php print render($title_suffix); ?>
      </div>

      <?php if ($tabs): ?>
        <div class="tabs">
          <?php print $tabs; ?>
        </div>
      <?php endif; ?>

      <?php print $action_links; ?>
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12 senjo-layouts-top panel-panel">
            <?php print $content['top']; ?>
          </div>
        </div>

        <div class="row">
          <div class="col-md-8 senjo-layouts-content panel-panel">
            <?php print $content['content']; ?>
          </div>
          <div class="col-md-4 senjo-layouts-sidebar panel-panel">
            <?php print $content['sidebar']; ?>
          </div>
        </div>
      </div>
    </main>
  </div>

  <?php if ($content['footer']): ?>
    <footer id="footer" class="l-footer" role="footer">
      <div class="container">
        <?php print $content['footer']; ?>
      </div>
    </footer>
  <?php endif; ?>
</div><!-- /.senjo -->