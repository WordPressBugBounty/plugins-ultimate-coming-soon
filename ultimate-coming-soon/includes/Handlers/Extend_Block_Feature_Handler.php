<?php

namespace ultimate_comming_soon\Handlers;

use ultimate_comming_soon\Classes\Singleton;

class Extend_Block_Feature_Handler extends Singleton
{
  private static $render_counter = 0;

  protected function __construct()
  {
    add_filter('register_block_type_args', [$this, 'add_responsive_justify_attrs'], 10, 2);
    add_filter('render_block', [$this, 'inject_responsive_css'], 10, 2);
  }

  public function add_responsive_justify_attrs($args, $block_type)
  {
    if ($block_type === 'core/group') {
      $args['attributes'] = array_merge($args['attributes'] ?? [], [
        'ucsTabletJustify'        => ['type' => 'string', 'default' => ''],
        'ucsMobileJustify'        => ['type' => 'string', 'default' => ''],
        'ucsDesktopPadding'       => ['type' => 'string', 'default' => ''],
        'ucsDesktopMargin'        => ['type' => 'string', 'default' => ''],
        'ucsTabletPadding'        => ['type' => 'string', 'default' => ''],
        'ucsTabletMargin'         => ['type' => 'string', 'default' => ''],
        'ucsMobilePadding'        => ['type' => 'string', 'default' => ''],
        'ucsMobileMargin'         => ['type' => 'string', 'default' => ''],
        'ucsHoverBgColor'         => ['type' => 'string', 'default' => ''],
        'ucsRotation'             => ['type' => 'number', 'default' => 0],
        // Desktop dimensions
        'ucsWidth'                => ['type' => 'string', 'default' => ''],
        'ucsHeight'               => ['type' => 'string', 'default' => ''],
        'ucsGap'                  => ['type' => 'string', 'default' => ''],
        'ucsDisplay'              => ['type' => 'string', 'default' => ''],
        'ucsAlignItems'           => ['type' => 'string', 'default' => ''],
        'ucsJustifyContent'       => ['type' => 'string', 'default' => ''],
        // Tablet dimensions
        'ucsTabletWidth'          => ['type' => 'string', 'default' => ''],
        'ucsTabletHeight'         => ['type' => 'string', 'default' => ''],
        'ucsTabletGap'            => ['type' => 'string', 'default' => ''],
        'ucsTabletDisplay'        => ['type' => 'string', 'default' => ''],
        'ucsTabletAlignItems'     => ['type' => 'string', 'default' => ''],
        'ucsTabletJustifyContent' => ['type' => 'string', 'default' => ''],
        // Mobile dimensions
        'ucsMobileWidth'          => ['type' => 'string', 'default' => ''],
        'ucsMobileHeight'         => ['type' => 'string', 'default' => ''],
        'ucsMobileGap'            => ['type' => 'string', 'default' => ''],
        'ucsMobileDisplay'        => ['type' => 'string', 'default' => ''],
        'ucsMobileAlignItems'     => ['type' => 'string', 'default' => ''],
        'ucsMobileJustifyContent' => ['type' => 'string', 'default' => ''],
        // Responsive flex-direction
        'ucsFlexDirection'        => ['type' => 'string',  'default' => ''],
        'ucsTabletFlexDirection'  => ['type' => 'string',  'default' => ''],
        'ucsMobileFlexDirection'  => ['type' => 'string',  'default' => ''],
        // Responsive visibility (legacy hide-only booleans — kept for backward compat)
        'ucsHideDesktop'          => ['type' => 'boolean', 'default' => false],
        'ucsHideTablet'           => ['type' => 'boolean', 'default' => false],
        'ucsHideMobile'           => ['type' => 'boolean', 'default' => false],
        // Responsive visibility (tri-state: "" | "hide" | "show")
        'ucsVisibilityDesktop'    => ['type' => 'string',  'default' => ''],
        'ucsVisibilityTablet'     => ['type' => 'string',  'default' => ''],
        'ucsVisibilityMobile'     => ['type' => 'string',  'default' => ''],
        // Responsive background position
        'ucsBackgroundPosition'       => ['type' => 'string',  'default' => ''],
        'ucsTabletBackgroundPosition' => ['type' => 'string',  'default' => ''],
        'ucsMobileBackgroundPosition' => ['type' => 'string',  'default' => ''],
        // Responsive background visibility
        'ucsHideBgDesktop'            => ['type' => 'boolean', 'default' => false],
        'ucsHideBgTablet'             => ['type' => 'boolean', 'default' => false],
        'ucsHideBgMobile'             => ['type' => 'boolean', 'default' => false],
        // Responsive background overlay
        'ucsOverlayDesktop'           => ['type' => 'string',  'default' => ''],
        'ucsOverlayTablet'            => ['type' => 'string',  'default' => ''],
        'ucsOverlayMobile'            => ['type' => 'string',  'default' => ''],
        // Responsive background color
        'ucsBgColorDesktop'           => ['type' => 'string',  'default' => ''],
        'ucsBgColorTablet'            => ['type' => 'string',  'default' => ''],
        'ucsBgColorMobile'            => ['type' => 'string',  'default' => ''],
        // Responsive border
        'ucsBorderDesktop'            => ['type' => 'string',  'default' => ''],
        'ucsBorderTablet'             => ['type' => 'string',  'default' => ''],
        'ucsBorderMobile'             => ['type' => 'string',  'default' => ''],
        'ucsBorderRadiusDesktop'      => ['type' => 'string',  'default' => ''],
        'ucsBorderRadiusTablet'       => ['type' => 'string',  'default' => ''],
        'ucsBorderRadiusMobile'       => ['type' => 'string',  'default' => ''],
      ]);
    }

    if ($block_type === 'core/paragraph' || $block_type === 'core/heading') {
      $args['attributes'] = array_merge($args['attributes'] ?? [], [
        'ucsWidth'             => ['type' => 'string', 'default' => ''],
        'ucsHeight'            => ['type' => 'string', 'default' => ''],
        'ucsDisplay'           => ['type' => 'string', 'default' => ''],
        'ucsAlignItems'        => ['type' => 'string', 'default' => ''],
        'ucsJustifyContent'    => ['type' => 'string', 'default' => ''],
        'ucsRotation'          => ['type' => 'number', 'default' => 0],
        // Desktop typography
        'ucsFontSize'          => ['type' => 'string', 'default' => ''],
        'ucsTextAlign'         => ['type' => 'string', 'default' => ''],
        // Tablet typography
        'ucsTabletFontSize'    => ['type' => 'string', 'default' => ''],
        'ucsTabletTextAlign'   => ['type' => 'string', 'default' => ''],
        // Mobile typography
        'ucsMobileFontSize'    => ['type' => 'string', 'default' => ''],
        'ucsMobileTextAlign'   => ['type' => 'string', 'default' => ''],
      ]);
    }

    if ($block_type === 'core/image') {
      $args['attributes'] = array_merge($args['attributes'] ?? [], [
        'ucsImageWidth'  => ['type' => 'string', 'default' => ''],
        'ucsImageHeight' => ['type' => 'string', 'default' => ''],
      ]);
    }

    return $args;
  }

  /**
   * Routes each rendered block to its specific CSS injection handler.
   */
  public function inject_responsive_css($block_content, $block)
  {
    switch ($block['blockName'] ?? '') {
      case 'core/group':
        return $this->inject_group_css($block_content, $block);
      case 'core/paragraph':
      case 'core/heading':
        return $this->inject_text_block_css($block_content, $block);
      case 'core/image':
        return $this->inject_image_css($block_content, $block);
      default:
        return $block_content;
    }
  }

  // Injects scoped responsive justification, spacing, and dimension CSS for core/group blocks.
  private function inject_group_css(string $block_content, array $block): string
  {
    $attrs = $block['attrs'] ?? [];

    $tablet_justify         = $attrs['ucsTabletJustify']        ?? '';
    $mobile_justify         = $attrs['ucsMobileJustify']        ?? '';
    $desktop_padding        = $attrs['ucsDesktopPadding']       ?? '';
    $desktop_margin         = $attrs['ucsDesktopMargin']        ?? '';
    $tablet_padding         = $attrs['ucsTabletPadding']        ?? '';
    $tablet_margin          = $attrs['ucsTabletMargin']         ?? '';
    $mobile_padding         = $attrs['ucsMobilePadding']        ?? '';
    $mobile_margin          = $attrs['ucsMobileMargin']         ?? '';
    $hover_bg               = $attrs['ucsHoverBgColor']         ?? '';
    $rotation               = $attrs['ucsRotation']             ?? 0;
    // Desktop dimensions
    $width                  = $attrs['ucsWidth']                ?? '';
    $height                 = $attrs['ucsHeight']               ?? '';
    $gap                    = $attrs['ucsGap']                  ?? '';
    $display                = $attrs['ucsDisplay']              ?? '';
    $align_items            = $attrs['ucsAlignItems']           ?? '';
    $justify_content        = $attrs['ucsJustifyContent']       ?? '';
    // Tablet dimensions
    $tablet_width           = $attrs['ucsTabletWidth']          ?? '';
    $tablet_height          = $attrs['ucsTabletHeight']         ?? '';
    $tablet_gap             = $attrs['ucsTabletGap']            ?? '';
    $tablet_display         = $attrs['ucsTabletDisplay']        ?? '';
    $tablet_align_items     = $attrs['ucsTabletAlignItems']     ?? '';
    $tablet_justify_content = $attrs['ucsTabletJustifyContent'] ?? '';
    // Mobile dimensions
    $mobile_width           = $attrs['ucsMobileWidth']          ?? '';
    $mobile_height          = $attrs['ucsMobileHeight']         ?? '';
    $mobile_gap             = $attrs['ucsMobileGap']            ?? '';
    $mobile_display         = $attrs['ucsMobileDisplay']        ?? '';
    $mobile_align_items     = $attrs['ucsMobileAlignItems']     ?? '';
    $mobile_justify_content = $attrs['ucsMobileJustifyContent'] ?? '';
    // Responsive flex-direction
    $flex_direction         = $attrs['ucsFlexDirection']        ?? '';
    $tablet_flex_direction  = $attrs['ucsTabletFlexDirection']  ?? '';
    $mobile_flex_direction  = $attrs['ucsMobileFlexDirection']  ?? '';
    // Responsive visibility (legacy)
    $hide_desktop           = ! empty($attrs['ucsHideDesktop']);
    $hide_tablet            = ! empty($attrs['ucsHideTablet']);
    $hide_mobile            = ! empty($attrs['ucsHideMobile']);
    // Responsive visibility (tri-state)
    $visibility_desktop     = $attrs['ucsVisibilityDesktop'] ?? '';
    $visibility_tablet      = $attrs['ucsVisibilityTablet']  ?? '';
    $visibility_mobile      = $attrs['ucsVisibilityMobile']  ?? '';
    // Responsive background position
    $bg_position            = $attrs['ucsBackgroundPosition']       ?? '';
    $tablet_bg_position     = $attrs['ucsTabletBackgroundPosition'] ?? '';
    $mobile_bg_position     = $attrs['ucsMobileBackgroundPosition'] ?? '';
    // Responsive background visibility
    $hide_bg_desktop        = ! empty($attrs['ucsHideBgDesktop']);
    $hide_bg_tablet         = ! empty($attrs['ucsHideBgTablet']);
    $hide_bg_mobile         = ! empty($attrs['ucsHideBgMobile']);
    // Responsive background overlay
    $overlay_desktop        = $attrs['ucsOverlayDesktop'] ?? '';
    $overlay_tablet         = $attrs['ucsOverlayTablet']  ?? '';
    $overlay_mobile         = $attrs['ucsOverlayMobile']  ?? '';
    // Responsive background color
    $bg_color_desktop       = $attrs['ucsBgColorDesktop'] ?? '';
    $bg_color_tablet        = $attrs['ucsBgColorTablet']  ?? '';
    $bg_color_mobile        = $attrs['ucsBgColorMobile']  ?? '';
    // Responsive border
    $border_desktop         = $attrs['ucsBorderDesktop']       ?? '';
    $border_tablet          = $attrs['ucsBorderTablet']        ?? '';
    $border_mobile          = $attrs['ucsBorderMobile']        ?? '';
    $border_radius_desktop  = $attrs['ucsBorderRadiusDesktop'] ?? '';
    $border_radius_tablet   = $attrs['ucsBorderRadiusTablet']  ?? '';
    $border_radius_mobile   = $attrs['ucsBorderRadiusMobile']  ?? '';

    $all_values = array_merge(
      [$tablet_justify, $mobile_justify, $desktop_padding, $desktop_margin, $tablet_padding, $tablet_margin, $mobile_padding, $mobile_margin, $hover_bg, $rotation, $width, $height, $gap, $display, $align_items, $justify_content],
      [$tablet_width, $tablet_height, $tablet_gap, $tablet_display, $tablet_align_items, $tablet_justify_content],
      [$mobile_width, $mobile_height, $mobile_gap, $mobile_display, $mobile_align_items, $mobile_justify_content],
      [$flex_direction, $tablet_flex_direction, $mobile_flex_direction],
      [$hide_desktop, $hide_tablet, $hide_mobile],
      [$visibility_desktop, $visibility_tablet, $visibility_mobile],
      [$bg_position, $tablet_bg_position, $mobile_bg_position],
      [$hide_bg_desktop, $hide_bg_tablet, $hide_bg_mobile],
      [$overlay_desktop, $overlay_tablet, $overlay_mobile],
      [$bg_color_desktop, $bg_color_tablet, $bg_color_mobile],
      [$border_desktop, $border_tablet, $border_mobile],
      [$border_radius_desktop, $border_radius_tablet, $border_radius_mobile]
    );

    if (! count(array_filter($all_values, fn($v) => $v !== '' && $v !== 0))) {
      return $block_content;
    }

    $unique_class  = 'ucs-grp-' . $this->next_id();
    $block_content = $this->stamp_unique_class($block_content, $unique_class);
    $selector      = '.' . $unique_class . '.wp-block-group';

    $css = '<style>';

    if (0 !== $rotation && '' !== $rotation) {
      $css .= $selector . '{transform:rotate(' . intval($rotation) . 'deg)!important;}';
    }

    // Visibility — tri-state (new, takes precedence)
    if ('hide' === $visibility_desktop)      $css .= $selector . '{display:none!important;}';
    elseif ('show' === $visibility_desktop)  $css .= $selector . '{display:block!important;}';
    if ('hide' === $visibility_tablet)       $css .= '@media (max-width:780px){' . $selector . '{display:none!important;}}';
    elseif ('show' === $visibility_tablet)   $css .= '@media (max-width:780px){' . $selector . '{display:block!important;}}';
    if ('hide' === $visibility_mobile)       $css .= '@media (max-width:600px){' . $selector . '{display:none!important;}}';
    elseif ('show' === $visibility_mobile)   $css .= '@media (max-width:600px){' . $selector . '{display:block!important;}}';
    // Visibility — legacy booleans (backward compat only)
    if ($hide_desktop) $css .= $selector . '{display:none!important;}';
    if ($hide_tablet)  $css .= '@media (max-width:780px){' . $selector . '{display:none!important;}}';
    if ($hide_mobile)  $css .= '@media (max-width:600px){' . $selector . '{display:none!important;}}';

    // Background visibility
    if ($hide_bg_desktop) $css .= $selector . '{background-image:none!important;}';
    if ($hide_bg_tablet)  $css .= '@media (max-width:780px){' . $selector . '{background-image:none!important;}}';
    if ($hide_bg_mobile)  $css .= '@media (max-width:600px){' . $selector . '{background-image:none!important;}}';

    // Background overlay
    if ('' !== $overlay_desktop || '' !== $overlay_tablet || '' !== $overlay_mobile) {
      $css .= $selector . '{position:relative!important;}';
      $css .= $selector . '::before{content:"";position:absolute;inset:0;pointer-events:none;z-index:0;}';
      $css .= $selector . '>*{position:relative;z-index:1;}';
    }
    if ('' !== $overlay_desktop) $css .= $selector . '::before{background:' . esc_attr($overlay_desktop) . '!important;}';
    if ('' !== $overlay_tablet)  $css .= '@media (max-width:780px){' . $selector . '::before{background:' . esc_attr($overlay_tablet) . '!important;}}';
    if ('' !== $overlay_mobile)  $css .= '@media (max-width:600px){' . $selector . '::before{background:' . esc_attr($overlay_mobile) . '!important;}}';

    if ('' !== $hover_bg) {
      $css .= $selector . '{transition:all 300ms;}';
      $css .= $selector . ':hover{background:' . esc_attr($hover_bg) . '!important;}';
    }

    // Desktop (base)
    $desktop_rules = '';
    if ('' !== $width)           $desktop_rules .= 'width:'           . esc_attr($width)           . '!important;';
    if ('' !== $height)          $desktop_rules .= 'height:'          . esc_attr($height)          . '!important;';
    if ('' !== $gap)             $desktop_rules .= 'gap:'             . esc_attr($gap)             . '!important;';
    if ('' !== $display)         $desktop_rules .= 'display:'         . esc_attr($display)         . '!important;';
    if ('' !== $align_items)     $desktop_rules .= 'align-items:'     . esc_attr($align_items)     . '!important;';
    if ('' !== $justify_content) $desktop_rules .= 'justify-content:' . esc_attr($justify_content) . '!important;';
    if ('' !== $flex_direction)  $desktop_rules .= 'flex-direction:'     . esc_attr($flex_direction)  . '!important;';
    if ('' !== $desktop_padding) $desktop_rules .= 'padding:'            . esc_attr($desktop_padding) . '!important;';
    if ('' !== $desktop_margin)  $desktop_rules .= 'margin:'             . esc_attr($desktop_margin)  . '!important;';
    if ('' !== $bg_position)     $desktop_rules .= 'background-position:' . esc_attr($bg_position)    . '!important;';
    if ('' !== $bg_color_desktop)     $desktop_rules .= 'background-color:' . esc_attr($bg_color_desktop)     . '!important;';
    if ('' !== $border_desktop)       $desktop_rules .= 'border:'            . esc_attr($border_desktop)        . '!important;';
    if ('' !== $border_radius_desktop) $desktop_rules .= 'border-radius:'   . esc_attr($border_radius_desktop) . '!important;';
    if ('' !== $desktop_rules)        $css .= $selector . '{' . $desktop_rules . '}';

    // Tablet (≤ 780 px)
    $tablet_rules = '';
    if ('' !== $tablet_justify)         $tablet_rules .= 'justify-content:' . esc_attr($tablet_justify)         . '!important;';
    if ('' !== $tablet_padding)         $tablet_rules .= 'padding:'         . esc_attr($tablet_padding)         . '!important;';
    if ('' !== $tablet_margin)          $tablet_rules .= 'margin:'          . esc_attr($tablet_margin)          . '!important;';
    if ('' !== $tablet_width)           $tablet_rules .= 'width:'           . esc_attr($tablet_width)           . '!important;';
    if ('' !== $tablet_height)          $tablet_rules .= 'height:'          . esc_attr($tablet_height)          . '!important;';
    if ('' !== $tablet_gap)             $tablet_rules .= 'gap:'             . esc_attr($tablet_gap)             . '!important;';
    if ('' !== $tablet_display)         $tablet_rules .= 'display:'         . esc_attr($tablet_display)         . '!important;';
    if ('' !== $tablet_align_items)     $tablet_rules .= 'align-items:'     . esc_attr($tablet_align_items)     . '!important;';
    if ('' !== $tablet_justify_content) $tablet_rules .= 'justify-content:' . esc_attr($tablet_justify_content) . '!important;';
    if ('' !== $tablet_flex_direction)  $tablet_rules .= 'flex-direction:'      . esc_attr($tablet_flex_direction)  . '!important;';
    if ('' !== $tablet_bg_position)     $tablet_rules .= 'background-position:' . esc_attr($tablet_bg_position)     . '!important;';
    if ('' !== $bg_color_tablet)         $tablet_rules .= 'background-color:' . esc_attr($bg_color_tablet)        . '!important;';
    if ('' !== $border_tablet)           $tablet_rules .= 'border:'           . esc_attr($border_tablet)           . '!important;';
    if ('' !== $border_radius_tablet)    $tablet_rules .= 'border-radius:'    . esc_attr($border_radius_tablet)    . '!important;';
    if ('' !== $tablet_rules)            $css .= '@media (max-width:780px){' . $selector . '{' . $tablet_rules . '}}';

    // Mobile (≤ 600 px)
    $mobile_rules = '';
    if ('' !== $mobile_justify)         $mobile_rules .= 'justify-content:' . esc_attr($mobile_justify)         . '!important;';
    if ('' !== $mobile_padding)         $mobile_rules .= 'padding:'         . esc_attr($mobile_padding)         . '!important;';
    if ('' !== $mobile_margin)          $mobile_rules .= 'margin:'          . esc_attr($mobile_margin)          . '!important;';
    if ('' !== $mobile_width)           $mobile_rules .= 'width:'           . esc_attr($mobile_width)           . '!important;';
    if ('' !== $mobile_height)          $mobile_rules .= 'height:'          . esc_attr($mobile_height)          . '!important;';
    if ('' !== $mobile_gap)             $mobile_rules .= 'gap:'             . esc_attr($mobile_gap)             . '!important;';
    if ('' !== $mobile_display)         $mobile_rules .= 'display:'         . esc_attr($mobile_display)         . '!important;';
    if ('' !== $mobile_align_items)     $mobile_rules .= 'align-items:'     . esc_attr($mobile_align_items)     . '!important;';
    if ('' !== $mobile_justify_content) $mobile_rules .= 'justify-content:' . esc_attr($mobile_justify_content) . '!important;';
    if ('' !== $mobile_flex_direction)  $mobile_rules .= 'flex-direction:'      . esc_attr($mobile_flex_direction)  . '!important;';
    if ('' !== $mobile_bg_position)     $mobile_rules .= 'background-position:' . esc_attr($mobile_bg_position)     . '!important;';
    if ('' !== $bg_color_mobile)         $mobile_rules .= 'background-color:' . esc_attr($bg_color_mobile)        . '!important;';
    if ('' !== $border_mobile)           $mobile_rules .= 'border:'           . esc_attr($border_mobile)           . '!important;';
    if ('' !== $border_radius_mobile)    $mobile_rules .= 'border-radius:'    . esc_attr($border_radius_mobile)    . '!important;';
    if ('' !== $mobile_rules)            $css .= '@media (max-width:600px){' . $selector . '{' . $mobile_rules . '}}';

    $css .= '</style>';

    return $css . $block_content;
  }

  // Injects scoped CSS for core/paragraph and core/heading blocks.
  private function inject_text_block_css(string $block_content, array $block): string
  {
    $attrs = $block['attrs'] ?? [];

    $width           = $attrs['ucsWidth']           ?? '';
    $height          = $attrs['ucsHeight']          ?? '';
    $display         = $attrs['ucsDisplay']         ?? '';
    $align_items     = $attrs['ucsAlignItems']      ?? '';
    $justify_content = $attrs['ucsJustifyContent']  ?? '';
    $rotation        = $attrs['ucsRotation']        ?? 0;
    // Desktop typography
    $font_size       = $attrs['ucsFontSize']        ?? '';
    $text_align      = $attrs['ucsTextAlign']       ?? '';
    // Tablet typography
    $tablet_font_size  = $attrs['ucsTabletFontSize']  ?? '';
    $tablet_text_align = $attrs['ucsTabletTextAlign'] ?? '';
    // Mobile typography
    $mobile_font_size  = $attrs['ucsMobileFontSize']  ?? '';
    $mobile_text_align = $attrs['ucsMobileTextAlign'] ?? '';

    $all_values = [$width, $height, $display, $align_items, $justify_content, $rotation, $font_size, $text_align, $tablet_font_size, $tablet_text_align, $mobile_font_size, $mobile_text_align];

    if (! count(array_filter($all_values, fn($v) => $v !== '' && $v !== 0))) {
      return $block_content;
    }

    $prefix        = $block['blockName'] === 'core/heading' ? 'ucs-hd-' : 'ucs-pd-';
    $unique_class  = $prefix . $this->next_id();
    $block_content = $this->stamp_unique_class($block_content, $unique_class);
    $selector      = '.' . $unique_class;

    $css = '<style>';

    // Desktop (base)
    $desktop_rules = '';
    if ('' !== $width)           $desktop_rules .= 'width:'           . esc_attr($width)           . '!important;';
    if ('' !== $height)          $desktop_rules .= 'height:'          . esc_attr($height)          . '!important;';
    if ('' !== $display)         $desktop_rules .= 'display:'         . esc_attr($display)         . '!important;';
    if ('' !== $align_items)     $desktop_rules .= 'align-items:'     . esc_attr($align_items)     . '!important;';
    if ('' !== $justify_content) $desktop_rules .= 'justify-content:' . esc_attr($justify_content) . '!important;';
    if ('' !== $font_size)       $desktop_rules .= 'font-size:'       . esc_attr($font_size)       . '!important;';
    if ('' !== $text_align)      $desktop_rules .= 'text-align:'      . esc_attr($text_align)      . '!important;';
    if (0 !== $rotation && '' !== $rotation) $desktop_rules .= 'transform:rotate(' . intval($rotation) . 'deg)!important;';
    if ('' !== $desktop_rules)   $css .= $selector . '{' . $desktop_rules . '}';

    // Tablet (≤ 780 px)
    $tablet_rules = '';
    if ('' !== $tablet_font_size)  $tablet_rules .= 'font-size:'  . esc_attr($tablet_font_size)  . '!important;';
    if ('' !== $tablet_text_align) $tablet_rules .= 'text-align:' . esc_attr($tablet_text_align) . '!important;';
    if ('' !== $tablet_rules)      $css .= '@media (max-width:780px){' . $selector . '{' . $tablet_rules . '}}';

    // Mobile (≤ 600 px)
    $mobile_rules = '';
    if ('' !== $mobile_font_size)  $mobile_rules .= 'font-size:'  . esc_attr($mobile_font_size)  . '!important;';
    if ('' !== $mobile_text_align) $mobile_rules .= 'text-align:' . esc_attr($mobile_text_align) . '!important;';
    if ('' !== $mobile_rules)      $css .= '@media (max-width:600px){' . $selector . '{' . $mobile_rules . '}}';

    $css .= '</style>';

    return $css . $block_content;
  }

  /**
   * Injects scoped width/height CSS for core/image blocks.
   */
  private function inject_image_css($block_content, $block)
  {
    $width  = $block['attrs']['ucsImageWidth']  ?? '';
    $height = $block['attrs']['ucsImageHeight'] ?? '';

    if ('' === $width && '' === $height) {
      return $block_content;
    }

    $unique_class  = 'ucs-img-' . $this->next_id();
    $block_content = $this->stamp_unique_class($block_content, $unique_class);

    $rules = 'display:block!important;';
    if ('' !== $width)  $rules .= 'width:'  . esc_attr($width)  . '!important;max-width:'  . esc_attr($width)  . '!important;';
    if ('' !== $height) $rules .= 'height:' . esc_attr($height) . '!important;max-height:' . esc_attr($height) . '!important;';

    $css = '<style>.' . $unique_class . ' img{' . $rules . '}</style>';

    return $css . $block_content;
  }

  // Increments and returns the shared render counter used for unique class names.
  private function next_id()
  {
    return ++self::$render_counter;
  }

  /**
   * Adds $unique_class to the first tag of $block_content.
   * Uses WP_HTML_Tag_Processor (WP 6.2+) with a regex fallback.
   */
  private function stamp_unique_class($block_content, $unique_class)
  {
    if (class_exists('\WP_HTML_Tag_Processor')) {
      $processor = new \WP_HTML_Tag_Processor($block_content);
      if ($processor->next_tag()) {
        $processor->add_class($unique_class);
        return $processor->get_updated_html();
      }
    } else {
      //this regex is ai generated i dont understand this.
      $block_content = preg_replace(
        '/(<\w[^>]*)\bclass="/',
        '$1class="' . esc_attr($unique_class) . ' ',
        $block_content,
        1
      );
    }

    return $block_content;
  }
}
