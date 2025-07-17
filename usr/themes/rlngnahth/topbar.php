<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

<header id="header" class="mobile-show">
    <div class="site-name">
    <a id="logo" href="<?php $this->options->siteUrl(); ?>">
        <?php if ($this->options->logoUrl): ?>
            <img class="logo" src="<?php $this->options->logoUrl() ?>" alt="<?php $this->options->title() ?>"/>
        <?php endif; ?>
        <span class="title-box">
            <span id="site-title"><?php $this->options->title() ?></span>
            <p class="description">
                <span class="desc"><?php $this->options->description() ?></span>
                <span class="domain"><?php echo explode("/",$this->request->getRequestUrl())[2]; ?></span>
            </p>
        </span>
    </a>
    </div>
</header>
<div class="nav-menu">
    <nav id="nav-menu" class="clearfix" role="navigation">
        <a class="listitem<?php if ($this->is('index')): ?> current<?php endif; ?>"
            href="<?php $this->options->siteUrl(); ?>"><?php _e('首页'); ?></a>
        <?php \Widget\Contents\Page\Rows::alloc()->to($pages); ?>
        <?php while ($pages->next()): ?>
        <a class="listitem<?php if ($this->is('page', $pages->slug)): ?> current<?php endif; ?>"
                href="<?php $pages->permalink(); ?>"
                title="<?php $pages->title(); ?>"><?php $pages->title(); ?></a>
        <?php endwhile; ?>
    </nav>
</div>