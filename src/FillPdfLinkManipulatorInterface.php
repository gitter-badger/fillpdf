<?php
/**
  * @file
  * Contains \Drupal\fillpdf\FillPdfLinkManipulatorInterface.
  */

namespace Drupal\fillpdf;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RequestStack;

/**
 * Defines an interface to allow parsing and building FillPDF Links.
 *
 * A guideline for functionality is that calling generateLink on the result
 * of parseLink should return a string that would parse the same way as the
 * original one.
 */
interface FillPdfLinkManipulatorInterface {

  /**
   * @param Request $request The request containing the query string to parse.
   * @return array
   */
  public function parseLink(Request $request);

  /**
   * @param array $parameters
   *   The array of parameters to be converted into a
   *   URL and query string.
   * @return string
   */
  public function generateLink(array $parameters);

}
