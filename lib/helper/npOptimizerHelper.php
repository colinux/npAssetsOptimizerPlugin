<?php
/**
 * npAssetsOptimizerPlugin helpers
 *
 * @package     npAssetsOptimizerPlugin
 * @subpackage  helper
 * @author      Nicolas Perriault <nperriault@gmail.com>
 */

/**
 * Includes optimized javascript files
 *
 */
function include_optimized_javascripts(array $options = array())
{
  $context = sfContext::getInstance();
  
  if ($context->has('assets_optimizer'))
  {
    $context->get('assets_optimizer')->replaceJavascripts($context->getResponse(), $options);
  }
  
  include_javascripts();
}

/**
 * Includes optimized stylesheet files
 *
 */
function include_optimized_stylesheets(array $options = array())
{
  $context = sfContext::getInstance();
  
  if ($context->has('assets_optimizer'))
  {
    $context->get('assets_optimizer')->replaceStylesheets($context->getResponse(), $options);
  }

  include_stylesheets();
}