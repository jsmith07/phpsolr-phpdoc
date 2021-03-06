<?php
/**
 * Helper autocomplete for php solr extension.
 *
 * @author Pierre-Julien Mazenot <pj.mazenot@gmail.com>
 * @link   https://github.com/pjmazenot/phpsolr-phpdoc
 */

/**
 * (PECL solr &gt;= 0.9.2)<br/>
 * Class SolrQuery<br/>
 * This class represents a collection of name-value pairs sent to the Solr server during a request.
 * @link http://php.net/manual/en/class.solrquery.php
 */
class SolrQuery extends SolrModifiableParams implements Serializable {

	/** @var int Used to specify that the sorting should be in acending order */
	const ORDER_ASC = 0;

	/** @var int Used to specify that the sorting should be in descending order */
	const ORDER_DESC = 1;

	/** @var int Used to specify that the facet should sort by index */
	const FACET_SORT_INDEX = 0;

	/** @var int Used to specify that the facet should sort by count */
	const FACET_SORT_COUNT = 1;

	/** @var int Used in the TermsComponent */
	const TERMS_SORT_INDEX = 0;

	/** @var int Used in the TermsComponent */
	const TERMS_SORT_COUNT = 1;

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Maps to facet.date
	 * @link http://php.net/manual/en/solrquery.addfacetdatefield.php
	 * @param string $dateField <p>
	 * The name of the date field.
	 * </p>
	 * @return SolrQuery <p>
	 * Returns a SolrQuery object.
	 * </p>
	 */
	public function addFacetDateField($dateField) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Adds another facet.date.other parameter
	 * @link http://php.net/manual/en/solrquery.addfacetdateother.php
	 * @param string $value <p>
	 * The value to use.
	 * </p>
	 * @param string $field_override <p>
	 * The field name for the override.
	 * </p>
	 * @return SolrQuery <p>
	 * Returns the current SolrQuery object, if the return value is used.
	 * </p>
	 */
	public function addFacetDateOther($value, $field_override) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Adds another field to the facet
	 * @link http://php.net/manual/en/solrquery.addfacetfield.php
	 * @param string $field <p>
	 * The name of the field
	 * </p>
	 * @return SolrQuery <p>
	 * Returns the current SolrQuery object, if the return value is used.
	 * </p>
	 */
	public function addFacetField($field) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Adds a facet query
	 * @link http://php.net/manual/en/solrquery.addfacetquery.php
	 * @param string $facetQuery <p>
	 * The facet query
	 * </p>
	 * @return SolrQuery <p>
	 * Returns the current SolrQuery object, if the return value is used.
	 * </p>
	 */
	public function addFacetQuery($facetQuery) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Specifies which fields to return in the result
	 * @link http://php.net/manual/en/solrquery.addfield.php
	 * @param string $field <p>
	 * The name of the field
	 * </p>
	 * @return SolrQuery <p>
	 * Returns a SolrQuery object.
	 * </p>
	 */
	public function addField($field) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Specifies a filter query
	 * @link http://php.net/manual/en/solrquery.addfilterquery.php
	 * @param string $fq <p>
	 * The filter query
	 * </p>
	 * @return SolrQuery <p>
	 * Returns a SolrQuery object.
	 * </p>
	 */
	public function addFilterQuery($fq) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Maps to hl.fl
	 * @link http://php.net/manual/en/solrquery.addhighlightfield.php
	 * @param string $field <p>
	 * Name of the field
	 * </p>
	 * @return SolrQuery <p>
	 * Returns the current SolrQuery object, if the return value is used.
	 * </p>
	 */
	public function addHighlightField($field) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Sets a field to use for similarity
	 * @link http://php.net/manual/en/solrquery.addmltfield.php
	 * @param string $field <p>
	 * The name of the field
	 * </p>
	 * @return SolrQuery <p>
	 * Returns the current SolrQuery object, if the return value is used.
	 * </p>
	 */
	public function addMltField($field) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Maps to mlt.qf
	 * @link http://php.net/manual/en/solrquery.addmltqueryfield.php
	 * @param string $field <p>
	 * The name of the field
	 * </p>
	 * @param float $boost <p>
	 * Its boost value
	 * </p>
	 * @return SolrQuery <p>
	 * Returns the current SolrQuery object, if the return value is used.
	 * </p>
	 */
	public function addMltQueryField($field, $boost) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Used to control how the results should be sorted
	 * @link http://php.net/manual/en/solrquery.addsortfield.php
	 * @param string $field <p>
	 * The name of the field
	 * </p>
	 * @param int $order <p>
	 * The sort direction. This should be either SolrQuery::ORDER_ASC or SolrQuery::ORDER_DESC.
	 * </p>
	 * @return SolrQuery <p>
	 * Returns a SolrQuery object.
	 * </p>
	 */
	public function addSortField($field, $order = SolrQuery::ORDER_DESC) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Requests a return of sub results for values within the given facet
	 * @link http://php.net/manual/en/solrquery.addstatsfacet.php
	 * @param string $field <p>
	 * The name of the field
	 * </p>
	 * @return SolrQuery <p>
	 * Returns the current SolrQuery object, if the return value is used.
	 * </p>
	 */
	public function addStatsFacet($field) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Maps to stats.field parameter
	 * @link http://php.net/manual/en/solrquery.addstatsfield.php
	 * @param string $field <p>
	 * The name of the field
	 * </p>
	 * @return SolrQuery <p>
	 * Returns the current SolrQuery object, if the return value is used.
	 * </p>
	 */
	public function addStatsField($field) {}

	/**
	 * (No version information available, might only be in Git)<br/>
	 * Collapses the result set to a single document per group
	 * @link http://php.net/manual/en/solrquery.collapse.php
	 * @param SolrCollapseFunction $collapseFunction
	 * @return SolrQuery <p>
	 * Returns a SolrQuery object.
	 * </p>
	 */
	public function collapse(SolrCollapseFunction $collapseFunction) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * SolrQuery constructor.
	 * @link http://php.net/manual/en/solrquery.construct.php
	 * @param string $q <p>
	 * Optional search query
	 * </p>
	 */
	public function __construct($q = '') {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Destructor
	 * @link http://php.net/manual/en/solrquery.destruct.php
	 */
	public function __destruct() {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Returns the value of the facet parameter
	 * @link http://php.net/manual/en/solrquery.getfacet.php
	 * @return bool <p>
	 * Returns a boolean on success and <b>NULL</b> if not set
	 * </p>
	 */
	public function getFacet() {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Returns the value for the facet.date.end parameter
	 * @link http://php.net/manual/en/solrquery.getfacetdateend.php
	 * @param string $field_override [optional] <p>
	 * The name of the field
	 * </p>
	 * @return string <p>
	 * Returns a string on success and <b>NULL</b> if not set
	 * </p>
	 */
	public function getFacetDateEnd($field_override) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Returns all the facet.date fields
	 * @link http://php.net/manual/en/solrquery.getfacetdatefields.php
	 * @return array <p>
	 * Returns all the facet.date fields as an array or <b>NULL</b> if none was set
	 * </p>
	 */
	public function getFacetDateFields() {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Returns the value of the facet.date.gap parameter
	 * @link http://php.net/manual/en/solrquery.getfacetdategap.php
	 * @param string $field_override [optional] <p>
	 * The name of the field
	 * </p>
	 * @return string <p>
	 * Returns a string on success and <b>NULL</b> if not set
	 * </p>
	 */
	public function getFacetDateGap($field_override) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Returns the value of the facet.date.hardend parameter
	 * @link http://php.net/manual/en/solrquery.getfacetdatehardend.php
	 * @param string $field_override [optional] <p>
	 * The name of the field
	 * </p>
	 * @return string <p>
	 * Returns a string on success and <b>NULL</b> if not set
	 * </p>
	 */
	public function getFacetDateHardEnd($field_override) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Returns the value for the facet.date.other parameter
	 * @link http://php.net/manual/en/solrquery.getfacetdatehardend.php
	 * @param string $field_override [optional] <p>
	 * The name of the field
	 * </p>
	 * @return string <p>
	 * Returns a string on success and <b>NULL</b> if not set
	 * </p>
	 */
	public function getFacetDateOther($field_override) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Returns the lower bound for the first date range for all date faceting on this field
	 * @link http://php.net/manual/en/solrquery.getfacetdatestart.php
	 * @param string $field_override [optional] <p>
	 * The name of the field
	 * </p>
	 * @return string <p>
	 * Returns a string on success and <b>NULL</b> if not set
	 * </p>
	 */
	public function getFacetDateStart($field_override) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Returns all the facet fields
	 * @link http://php.net/manual/en/solrquery.getfacetfields.php
	 * @return array <p>
	 * Returns an array of all the fields and <b>NULL</b> if none was set
	 * </p>
	 */
	public function getFacetFields() {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Returns the maximum number of constraint counts that should be returned for the facet fields
	 * @link http://php.net/manual/en/solrquery.getfacetlimit.php
	 * @param string $field_override [optional] <p>
	 * The name of the field
	 * </p>
	 * @return int <p>
	 * Returns an integer on success and <b>NULL</b> if not set
	 * </p>
	 */
	public function getFacetLimit($field_override) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Returns the value of the facet.method parameter
	 * @link http://php.net/manual/en/solrquery.getfacetmethod.php
	 * @param string $field_override [optional] <p>
	 * The name of the field
	 * </p>
	 * @return string <p>
	 * Returns a string on success and <b>NULL</b> if not set
	 * </p>
	 */
	public function getFacetMethod($field_override) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Returns the minimum counts for facet fields should be included in the response
	 * @link http://php.net/manual/en/solrquery.getfacetmincount.php
	 * @param string $field_override [optional] <p>
	 * The name of the field
	 * </p>
	 * @return int <p>
	 * Returns an integer on success and <b>NULL</b> if not set
	 * </p>
	 */
	public function getFacetMinCount($field_override) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Returns the current state of the facet.missing parameter
	 * @link http://php.net/manual/en/solrquery.getfacetmissing.php
	 * @param string $field_override [optional] <p>
	 * The name of the field
	 * </p>
	 * @return string <p>
	 * Returns a boolean on success and <b>NULL</b> if not set
	 * </p>
	 */
	public function getFacetMissing($field_override) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Returns an offset into the list of constraints to be used for pagination
	 * @link http://php.net/manual/en/solrquery.getfacetoffset.php
	 * @param string $field_override [optional] <p>
	 * The name of the field
	 * </p>
	 * @return int <p>
	 * Returns an integer on success and <b>NULL</b> if not set
	 * </p>
	 */
	public function getFacetOffset($field_override) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Returns the facet prefix
	 * @link http://php.net/manual/en/solrquery.getfacetprefix.php
	 * @param string $field_override [optional] <p>
	 * The name of the field
	 * </p>
	 * @return string <p>
	 * Returns a string on success and <b>NULL</b> if not set
	 * </p>
	 */
	public function getFacetPrefix($field_override) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Returns all the facet queries
	 * @link http://php.net/manual/en/solrquery.getfacetqueries.php
	 * @return string <p>
	 * Returns an array on success and <b>NULL</b> if not set
	 * </p>
	 */
	public function getFacetQueries() {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Returns the facet sort type
	 * @link http://php.net/manual/en/solrquery.getfacetsort.php
	 * @param string $field_override [optional] <p>
	 * The name of the field
	 * </p>
	 * @return int <p>
	 * Returns an integer (SolrQuery::FACET_SORT_INDEX or SolrQuery::FACET_SORT_COUNT) on success or <b>NULL</b> if not
	 * set.
	 * </p>
	 */
	public function getFacetSort($field_override) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Returns the list of fields that will be returned in the response
	 * @link http://php.net/manual/en/solrquery.getfields.php
	 * @return string <p>
	 * Returns an array on success and <b>NULL</b> if not set
	 * </p>
	 */
	public function getFields() {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Returns an array of filter queries
	 * @link http://php.net/manual/en/solrquery.getfilterqueries.php
	 * @return string <p>
	 * Returns an array on success and <b>NULL</b> if not set
	 * </p>
	 */
	public function getFilterQueries() {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Returns the state of the hl parameter
	 * @link http://php.net/manual/en/solrquery.gethighlight.php
	 * @return bool <p>
	 * Returns the state of the hl parameter
	 * </p>
	 */
	public function getHighlight() {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Returns the highlight field to use as backup or default
	 * @link http://php.net/manual/en/solrquery.gethighlightalternatefield.php
	 * @param string $field_override [optional] <p>
	 * The name of the field
	 * </p>
	 * @return string <p>
	 * Returns a string on success and <b>NULL</b> if not set
	 * </p>
	 */
	public function getHighlightAlternateField($field_override) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Returns all the fields that Solr should generate highlighted snippets for
	 * @link http://php.net/manual/en/solrquery.gethighlightfields.php
	 * @return array <p>
	 * Returns an array on success and <b>NULL</b> if not set
	 * </p>
	 */
	public function getHighlightFields() {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Returns the formatter for the highlighted output
	 * @link http://php.net/manual/en/solrquery.gethighlightformatter.php
	 * @param string $field_override [optional] <p>
	 * The name of the field
	 * </p>
	 * @return string <p>
	 * Returns a string on success and <b>NULL</b> if not set
	 * </p>
	 */
	public function getHighlightFormatter($field_override) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Returns the text snippet generator for highlighted text
	 * @link http://php.net/manual/en/solrquery.gethighlightfragmenter.php
	 * @param string $field_override [optional] <p>
	 * The name of the field
	 * </p>
	 * @return string <p>
	 * Returns a string on success and <b>NULL</b> if not set
	 * </p>
	 */
	public function getHighlightFragmenter($field_override) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Returns the number of characters of fragments to consider for highlighting
	 * @link http://php.net/manual/en/solrquery.gethighlightfragsize.php
	 * @param string $field_override [optional] <p>
	 * The name of the field
	 * </p>
	 * @return int <p>
	 * Returns an integer on success and <b>NULL</b> if not set
	 * </p>
	 */
	public function getHighlightFragsize($field_override) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Returns whether or not to enable highlighting for range/wildcard/fuzzy/prefix queries
	 * @link http://php.net/manual/en/solrquery.gethighlighthighlightmultiterm.php
	 * @return bool <p>
	 * Returns a boolean on success and <b>NULL</b> if not set
	 * </p>
	 */
	public function getHighlightHighlightMultiTerm() {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Returns the maximum number of characters of the field to return
	 * @link http://php.net/manual/en/solrquery.gethighlightmaxalternatefieldlength.php
	 * @param string $field_override [optional] <p>
	 * The name of the field
	 * </p>
	 * @return int <p>
	 * Returns an integer on success and <b>NULL</b> if not set
	 * </p>
	 */
	public function getHighlightMaxAlternateFieldLength($field_override) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Returns the maximum number of characters into a document to look for suitable snippets
	 * @link http://php.net/manual/en/solrquery.gethighlightmaxanalyzedchars.php
	 * @return int <p>
	 * Returns an integer on success and <b>NULL</b> if not set
	 * </p>
	 */
	public function getHighlightMaxAnalyzedChars() {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Returns whether or not the collapse contiguous fragments into a single fragment
	 * @link http://php.net/manual/en/solrquery.gethighlightmergecontiguous.php
	 * @param string $field_override [optional] <p>
	 * The name of the field
	 * </p>
	 * @return bool <p>
	 * Returns a boolean on success and <b>NULL</b> if not set
	 * </p>
	 */
	public function getHighlightMergeContiguous($field_override) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Returns the maximum number of characters from a field when using the regex fragmenter
	 * @link http://php.net/manual/en/solrquery.gethighlightregexmaxanalyzedchars.php
	 * @return int <p>
	 * Returns an integer on success and <b>NULL</b> if not set
	 * </p>
	 */
	public function getHighlightRegexMaxAnalyzedChars() {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Returns the regular expression for fragmenting
	 * @link http://php.net/manual/en/solrquery.gethighlightregexpattern.php
	 * @return string <p>
	 * Returns a string on success and <b>NULL</b> if not set
	 * </p>
	 */
	public function getHighlightRegexPattern() {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Returns the deviation factor from the ideal fragment size
	 * @link http://php.net/manual/en/solrquery.gethighlightregexslop.php
	 * @return float <p>
	 * Returns a double on success and <b>NULL</b> if not set.
	 * </p>
	 */
	public function getHighlightRegexSlop() {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Returns if a field will only be highlighted if the query matched in this particular field
	 * @link http://php.net/manual/en/solrquery.gethighlightrequirefieldmatch.php
	 * @return bool <p>
	 * Returns a boolean on success and <b>NULL</b> if not set
	 * </p>
	 */
	public function getHighlightRequireFieldMatch() {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Returns the text which appears after a highlighted term
	 * @link http://php.net/manual/en/solrquery.gethighlightsimplepost.php
	 * @param string $field_override [optional] <p>
	 * The name of the field
	 * </p>
	 * @return string <p>
	 * Returns a string on success and <b>NULL</b> if not set
	 * </p>
	 */
	public function getHighlightSimplePost($field_override) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Returns the text which appears before a highlighted term
	 * @link http://php.net/manual/en/solrquery.gethighlightsimplepre.php
	 * @param string $field_override [optional] <p>
	 * The name of the field
	 * </p>
	 * @return string <p>
	 * Returns a string on success and <b>NULL</b> if not set
	 * </p>
	 */
	public function getHighlightSimplePre($field_override) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Returns the maximum number of highlighted snippets to generate per field
	 * @link http://php.net/manual/en/solrquery.gethighlightsnippets.php
	 * @param string $field_override [optional] <p>
	 * The name of the field
	 * </p>
	 * @return int <p>
	 * Returns an integer on success and <b>NULL</b> if not set
	 * </p>
	 */
	public function getHighlightSnippets($field_override) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Returns the state of the hl.usePhraseHighlighter parameter
	 * @link http://php.net/manual/en/solrquery.gethighlightusephrasehighlighter.php
	 * @return bool <p>
	 * Returns a boolean on success and <b>NULL</b> if not set
	 * </p>
	 */
	public function getHighlightUsePhraseHighlighter() {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Returns whether or not MoreLikeThis results should be enabled
	 * @link http://php.net/manual/en/solrquery.getmlt.php
	 * @return bool <p>
	 * Returns a boolean on success and <b>NULL</b> if not set
	 * </p>
	 */
	public function getMlt() {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Returns whether or not the query will be boosted by the interesting term relevance
	 * @link http://php.net/manual/en/solrquery.getmltboost.php
	 * @return bool <p>
	 * Returns a boolean on success and <b>NULL</b> if not set
	 * </p>
	 */
	public function getMltBoost() {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Returns the number of similar documents to return for each result
	 * @link http://php.net/manual/en/solrquery.getmltcount.php
	 * @return int <p>
	 * Returns an integer on success and <b>NULL</b> if not set
	 * </p>
	 */
	public function getMltCount() {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Returns all the fields to use for similarity
	 * @link http://php.net/manual/en/solrquery.getmltfields.php
	 * @return array <p>
	 * Returns an array on success and <b>NULL</b> if not set
	 * </p>
	 */
	public function getMltFields() {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Returns the maximum number of query terms that will be included in any generated query
	 * @link http://php.net/manual/en/solrquery.getmltmaxnumqueryterms.php
	 * @return int <p>
	 * Returns an integer on success and <b>NULL</b> if not set
	 * </p>
	 */
	public function getMltMaxNumQueryTerms() {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Returns the maximum number of tokens to parse in each document field that is not stored with TermVector support
	 * @link http://php.net/manual/en/solrquery.getmltmaxnumtokens.php
	 * @return int <p>
	 * Returns an integer on success and <b>NULL</b> if not set
	 * </p>
	 */
	public function getMltMaxNumTokens() {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Returns the maximum word length above which words will be ignored
	 * @link http://php.net/manual/en/solrquery.getmltmaxwordlength.php
	 * @return int <p>
	 * Returns an integer on success and <b>NULL</b> if not set
	 * </p>
	 */
	public function getMltMaxWordLength() {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Returns the treshold frequency at which words will be ignored which do not occur in at least this many docs
	 * @link http://php.net/manual/en/solrquery.getmltmindocfrequency.php
	 * @return int <p>
	 * Returns an integer on success and <b>NULL</b> if not set
	 * </p>
	 */
	public function getMltMinDocFrequency() {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Returns the frequency below which terms will be ignored in the source document
	 * @link http://php.net/manual/en/solrquery.getmltmintermfrequency.php
	 * @return int <p>
	 * Returns an integer on success and <b>NULL</b> if not set
	 * </p>
	 */
	public function getMltMinTermFrequency() {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Returns the minimum word length below which words will be ignored
	 * @link http://php.net/manual/en/solrquery.getmltminwordlength.php
	 * @return int <p>
	 * Returns an integer on success and <b>NULL</b> if not set
	 * </p>
	 */
	public function getMltMinWordLength() {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Returns the query fields and their boosts
	 * @link http://php.net/manual/en/solrquery.getmltqueryfields.php
	 * @return array <p>
	 * Returns an array on success and <b>NULL</b> if not set
	 * </p>
	 */
	public function getMltQueryFields() {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Returns the main query
	 * @link http://php.net/manual/en/solrquery.getquery.php
	 * @return string <p>
	 * Returns a string on success and <b>NULL</b> if not set
	 * </p>
	 */
	public function getQuery() {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Returns the maximum number of documents
	 * @link http://php.net/manual/en/solrquery.getrows.php
	 * @return int <p>
	 * Returns an integer on success and <b>NULL</b> if not set
	 * </p>
	 */
	public function getRows() {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Returns all the sort fields
	 * @link http://php.net/manual/en/solrquery.getsortfields.php
	 * @return array <p>
	 * Returns an array on success and <b>NULL</b> if none of the parameters was set.
	 * </p>
	 */
	public function getSortFields() {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Returns the offset in the complete result set
	 * @link http://php.net/manual/en/solrquery.getstart.php
	 * @return int <p>
	 * Returns an integer on success and <b>NULL</b> if not set
	 * </p>
	 */
	public function getStart() {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Returns whether or not stats is enabled
	 * @link http://php.net/manual/en/solrquery.getstats.php
	 * @return bool <p>
	 * Returns a boolean on success and <b>NULL</b> if not set
	 * </p>
	 */
	public function getStats() {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Returns all the stats facets that were set
	 * @link http://php.net/manual/en/solrquery.getstatsfacets.php
	 * @return array <p>
	 * Returns an array on success and <b>NULL</b> if not set
	 * </p>
	 */
	public function getStatsFacets() {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Returns all the statistics fields
	 * @link http://php.net/manual/en/solrquery.getstatsfields.php
	 * @return array <p>
	 * Returns an array on success and <b>NULL</b> if not set
	 * </p>
	 */
	public function getStatsFields() {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Returns whether or not the TermsComponent is enabled
	 * @link http://php.net/manual/en/solrquery.getterms.php
	 * @return bool <p>
	 * Returns a boolean on success and <b>NULL</b> if not set
	 * </p>
	 */
	public function getTerms() {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Returns the field from which the terms are retrieved
	 * @link http://php.net/manual/en/solrquery.gettermsfield.php
	 * @return string <p>
	 * Returns a string on success and <b>NULL</b> if not set
	 * </p>
	 */
	public function getTermsField() {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Returns whether or not to include the lower bound in the result set
	 * @link http://php.net/manual/en/solrquery.gettermsincludelowerbound.php
	 * @return bool <p>
	 * Returns a boolean on success and <b>NULL</b> if not set
	 * </p>
	 */
	public function getTermsIncludeLowerBound() {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Returns whether or not to include the upper bound term in the result set
	 * @link http://php.net/manual/en/solrquery.gettermsincludeupperbound.php
	 * @return bool <p>
	 * Returns a boolean on success and <b>NULL</b> if not set
	 * </p>
	 */
	public function getTermsIncludeUpperBound() {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Returns the maximum number of terms Solr should return
	 * @link http://php.net/manual/en/solrquery.gettermslimit.php
	 * @return int <p>
	 * Returns an integer on success and <b>NULL</b> if not set
	 * </p>
	 */
	public function getTermsLimit() {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Returns the term to start at
	 * @link http://php.net/manual/en/solrquery.gettermslowerbound.php
	 * @return string <p>
	 * Returns a string on success and <b>NULL</b> if not set
	 * </p>
	 */
	public function getTermsLowerBound() {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Returns the maximum document frequency
	 * @link http://php.net/manual/en/solrquery.gettermsmaxcount.php
	 * @return int <p>
	 * Returns an integer on success and <b>NULL</b> if not set
	 * </p>
	 */
	public function getTermsMaxCount() {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Returns the minimum document frequency to return in order to be included
	 * @link http://php.net/manual/en/solrquery.gettermsmincount.php
	 * @return int <p>
	 * Returns an integer on success and <b>NULL</b> if not set
	 * </p>
	 */
	public function getTermsMinCount() {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Returns the term prefix
	 * @link http://php.net/manual/en/solrquery.gettermsprefix.php
	 * @return string <p>
	 * Returns a string on success and <b>NULL</b> if not set
	 * </p>
	 */
	public function getTermsPrefix() {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Whether or not to return raw characters
	 * @link http://php.net/manual/en/solrquery.gettermsreturnraw.php
	 * @return bool <p>
	 * Returns a boolean on success and <b>NULL</b> if not set
	 * </p>
	 */
	public function getTermsReturnRaw() {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Returns an integer indicating how terms are sorted
	 * @link http://php.net/manual/en/solrquery.gettermssort.php
	 * @return int <p>
	 * Returns an integer on success and <b>NULL</b> if not set<br/>
	 * SolrQuery::TERMS_SORT_INDEX indicates that the terms are returned by index order.<br/>
	 * SolrQuery::TERMS_SORT_COUNT implies that the terms are sorted by term frequency (highest count first)
	 * </p>
	 */
	public function getTermsSort() {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Returns the term to stop at
	 * @link http://php.net/manual/en/solrquery.gettermsupperbound.php
	 * @return string <p>
	 * Returns a string on success and <b>NULL</b> if not set
	 * </p>
	 */
	public function getTermsUpperBound() {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Returns the time in milliseconds allowed for the query to finish
	 * @link http://php.net/manual/en/solrquery.gettimeallowed.php
	 * @return int <p>
	 * Returns an integer on success and <b>NULL</b> if not set
	 * </p>
	 */
	public function getTimeAllowed() {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Removes one of the facet date fields
	 * @link http://php.net/manual/en/solrquery.removefacetdatefield.php
	 * @param string $field <p>
	 * The name of the date field to remove
	 * </p>
	 * @return SolrQuery <p>
	 * Returns the current SolrQuery object, if the return value is used.
	 * </p>
	 */
	public function removeFacetDateField($field) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Removes one of the facet.date.other parameters
	 * @link http://php.net/manual/en/solrquery.removefacetdateother.php
	 * @param string $value <p>
	 * The value
	 * </p>
	 * @param string $field_override [optional] <p>
	 * The name of the field.
	 * </p>
	 * @return SolrQuery <p>
	 * Returns the current SolrQuery object, if the return value is used.
	 * </p>
	 */
	public function removeFacetDateOther($value, $field_override) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Removes one of the facet.date parameters
	 * @link http://php.net/manual/en/solrquery.removefacetfield.php
	 * @param string $field <p>
	 * The name of the field
	 * </p>
	 * @return SolrQuery <p>
	 * Returns the current SolrQuery object, if the return value is used.
	 * </p>
	 */
	public function removeFacetField($field) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Removes one of the facet.query parameters
	 * @link http://php.net/manual/en/solrquery.removefacetquery.php
	 * @param string $value <p>
	 * The value
	 * </p>
	 * @return SolrQuery <p>
	 * Returns the current SolrQuery object, if the return value is used.
	 * </p>
	 */
	public function removeFacetQuery($value) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Removes a field from the list of fields
	 * @link http://php.net/manual/en/solrquery.removefield.php
	 * @param string $field <p>
	 * The name of the field
	 * </p>
	 * @return SolrQuery <p>
	 * Returns the current SolrQuery object, if the return value is used.
	 * </p>
	 */
	public function removeField($field) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Removes a filter query
	 * @link http://php.net/manual/en/solrquery.removefilterquery.php
	 * @param string $fq
	 * @return SolrQuery <p>
	 * Returns the current SolrQuery object, if the return value is used.
	 * </p>
	 */
	public function removeFilterQuery($fq) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Removes one of the fields used for highlighting
	 * @link http://php.net/manual/en/solrquery.removehighlightfield.php
	 * @param string $field <p>
	 * The name of the field
	 * </p>
	 * @return SolrQuery <p>
	 * Returns the current SolrQuery object, if the return value is used.
	 * </p>
	 */
	public function removeHighlightField($field) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Removes one of the moreLikeThis fields
	 * @link http://php.net/manual/en/solrquery.removemltfield.php
	 * @param string $field <p>
	 * The name of the field
	 * </p>
	 * @return SolrQuery <p>
	 * Returns the current SolrQuery object, if the return value is used.
	 * </p>
	 */
	public function removeMltField($field) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Removes one of the moreLikeThis query fields
	 * @link http://php.net/manual/en/solrquery.removemltqueryfield.php
	 * @param string $queryField <p>
	 * The query field
	 * </p>
	 * @return SolrQuery <p>
	 * Returns the current SolrQuery object, if the return value is used.
	 * </p>
	 */
	public function removeMltQueryField($queryField) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Removes one of the sort fields
	 * @link http://php.net/manual/en/solrquery.removesortfield.php
	 * @param string $field <p>
	 * The name of the field
	 * </p>
	 * @return SolrQuery <p>
	 * Returns the current SolrQuery object, if the return value is used.
	 * </p>
	 */
	public function removeSortField($field) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Removes one of the stats.facet parameters
	 * @link http://php.net/manual/en/solrquery.removestatsfacet.php
	 * @param string $value <p>
	 * The value
	 * </p>
	 * @return SolrQuery <p>
	 * Returns the current SolrQuery object, if the return value is used.
	 * </p>
	 */
	public function removeStatsFacet($value) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Removes one of the stats.field parameters
	 * @link http://php.net/manual/en/solrquery.removestatsfield.php
	 * @param string $field <p>
	 * The name of the field
	 * </p>
	 * @return SolrQuery <p>
	 * Returns the current SolrQuery object, if the return value is used.
	 * </p>
	 */
	public function removeStatsField($field) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Toggles the echoHandler parameter
	 * @link http://php.net/manual/en/solrquery.setechohandler.php
	 * @param bool $flag <p>
	 * <b>TRUE</b> or <b>FALSE</b>
	 * </p>
	 * @return SolrQuery <p>
	 * Returns the current SolrQuery object, if the return value is used.
	 * </p>
	 */
	public function setEchoHandler($flag) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Determines what kind of parameters to include in the response
	 * @link http://php.net/manual/en/solrquery.setechoparams.php
	 * @param string $type <p>
	 * The type of parameters to include:
	 * </p>
	 * <ul>
	 * <li><b>none</b>: don't include any request parameters for debugging</li>
	 * <li><b>explicit</b>: include the parameters explicitly specified by the client in the request</li>
	 * <li><b>all</b>: include all parameters involved in this request, either specified explicitly by the client, or
	 * implicit because of the request handler configuration.</li>
	 * </ul>
	 * @return SolrQuery <p>
	 * Returns the current SolrQuery object, if the return value is used.
	 * </p>
	 */
	public function setEchoParams($type) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Sets the explainOther common query parameter
	 * @link http://php.net/manual/en/solrquery.setexplainother.php
	 * @param string $query <p>
	 * The Lucene query to identify a set of documents
	 * </p>
	 * @return SolrQuery <p>
	 * Returns the current SolrQuery object, if the return value is used.
	 * </p>
	 */
	public function setExplainOther($query) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Maps to the facet parameter. Enables or disables facetting
	 * @link http://php.net/manual/en/solrquery.setfacet.php
	 * @param bool $flag <p>
	 * <b>TRUE</b> enables faceting and <b>FALSE</b> disables it.
	 * </p>
	 * @return SolrQuery <p>
	 * Returns the current SolrQuery object, if the return value is used.
	 * </p>
	 */
	public function setFacet($flag) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Maps to facet.date.end
	 * @link http://php.net/manual/en/solrquery.setfacetdateend.php
	 * @param string $value <p>
	 * See facet.date.end
	 * </p>
	 * @param string $field_override [optional] <p>
	 * Name of the field
	 * </p>
	 * @return SolrQuery <p>
	 * Returns the current SolrQuery object, if the return value is used.
	 * </p>
	 */
	public function setFacetDateEnd($value, $field_override) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Maps to facet.date.gap
	 * @link http://php.net/manual/en/solrquery.setfacetdategap.php
	 * @param string $value <p>
	 * See facet.date.gap
	 * </p>
	 * @param string $field_override [optional] <p>
	 * Name of the field
	 * </p>
	 * @return SolrQuery <p>
	 * Returns the current SolrQuery object, if the return value is used.
	 * </p>
	 */
	public function setFacetDateGap($value, $field_override) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Maps to facet.date.hardend
	 * @link http://php.net/manual/en/solrquery.setfacetdatehardend.php
	 * @param string $value <p>
	 * See facet.date.hardend
	 * </p>
	 * @param string $field_override [optional] <p>
	 * Name of the field
	 * </p>
	 * @return SolrQuery <p>
	 * Returns the current SolrQuery object, if the return value is used.
	 * </p>
	 */
	public function setFacetDateHardEnd($value, $field_override) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Maps to facet.date.start
	 * @link http://php.net/manual/en/solrquery.setfacetdatestart.php
	 * @param string $value <p>
	 * See facet.date.start
	 * </p>
	 * @param string $field_override [optional] <p>
	 * Name of the field
	 * </p>
	 * @return SolrQuery <p>
	 * Returns the current SolrQuery object, if the return value is used.
	 * </p>
	 */
	public function setFacetDateStart($value, $field_override) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Sets the minimum document frequency used for determining term count
	 * @link http://php.net/manual/en/solrquery.setfacetenumcachemindefaultfrequency.php
	 * @param int $frequency <p>
	 * The minimum frequency
	 * </p>
	 * @param string $field_override [optional] <p>
	 * Name of the field
	 * </p>
	 * @return SolrQuery <p>
	 * Returns the current SolrQuery object, if the return value is used.
	 * </p>
	 */
	public function setFacetEnumCacheMinDefaultFrequency($frequency, $field_override) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Maps to facet.limit
	 * @link http://php.net/manual/en/solrquery.setfacetlimit.php
	 * @param int $limit <p>
	 * The maximum number of constraint counts
	 * </p>
	 * @param string $field_override [optional] <p>
	 * Name of the field
	 * </p>
	 * @return SolrQuery <p>
	 * Returns the current SolrQuery object, if the return value is used.
	 * </p>
	 */
	public function setFacetLimit($limit, $field_override) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Specifies the type of algorithm to use when faceting a field
	 * @link http://php.net/manual/en/solrquery.setfacetmethod.php
	 * @param string $method <p>
	 * The method to use.
	 * </p>
	 * @param string $field_override [optional] <p>
	 * Name of the field
	 * </p>
	 * @return SolrQuery <p>
	 * Returns the current SolrQuery object, if the return value is used.
	 * </p>
	 */
	public function setFacetMethod($method, $field_override) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Maps to facet.mincount
	 * @link http://php.net/manual/en/solrquery.setfacetmincount.php
	 * @param int $mincount <p>
	 * The minimum count
	 * </p>
	 * @param string $field_override [optional] <p>
	 * Name of the field
	 * </p>
	 * @return SolrQuery <p>
	 * Returns the current SolrQuery object, if the return value is used.
	 * </p>
	 */
	public function setFacetMinCount($mincount, $field_override) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Maps to facet.missing
	 * @link http://php.net/manual/en/solrquery.setfacetmissing.php
	 * @param bool $flag <p>
	 * <b>TRUE</b> turns this feature on. <b>FALSE</b> disables it.
	 * </p>
	 * @param string $field_override [optional] <p>
	 * Name of the field
	 * </p>
	 * @return SolrQuery <p>
	 * Returns the current SolrQuery object, if the return value is used.
	 * </p>
	 */
	public function setFacetMissing($flag, $field_override) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Sets the offset into the list of constraints to allow for pagination
	 * @link http://php.net/manual/en/solrquery.setfacetoffset.php
	 * @param int $offset <p>
	 * The offset
	 * </p>
	 * @param string $field_override [optional] <p>
	 * Name of the field
	 * </p>
	 * @return SolrQuery <p>
	 * Returns the current SolrQuery object, if the return value is used.
	 * </p>
	 */
	public function setFacetOffset($offset, $field_override) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Specifies a string prefix with which to limits the terms on which to facet
	 * @link http://php.net/manual/en/solrquery.setfacetprefix.php
	 * @param string $prefix <p>
	 * The prefix string
	 * </p>
	 * @param string $field_override [optional] <p>
	 * Name of the field
	 * </p>
	 * @return SolrQuery <p>
	 * Returns the current SolrQuery object, if the return value is used.
	 * </p>
	 */
	public function setFacetPrefix($prefix, $field_override) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Determines the ordering of the facet field constraints
	 * @link http://php.net/manual/en/solrquery.setfacetsort.php
	 * @param int $facetSort <p>
	 * Use SolrQuery::FACET_SORT_INDEX for sorting by index order or SolrQuery::FACET_SORT_COUNT for sorting by count.
	 * </p>
	 * @param string $field_override [optional] <p>
	 * Name of the field
	 * </p>
	 * @return SolrQuery <p>
	 * Returns the current SolrQuery object, if the return value is used.
	 * </p>
	 */
	public function setFacetSort($facetSort, $field_override) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Enables or disables highlighting
	 * @link http://php.net/manual/en/solrquery.sethighlight.php
	 * @param bool $flag<p>
	 * Setting it to <b>TRUE</b> enables highlighted snippets to be generated in the query response.<br/>
	 * Setting it to <b>FALSE</b> disables highlighting
	 * </p>
	 * @return SolrQuery <p>
	 * Returns the current SolrQuery object, if the return value is used.
	 * </p>
	 */
	public function setHighlight($flag) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Specifies the backup field to use
	 * @link http://php.net/manual/en/solrquery.sethighlightalternatefield.php
	 * @param string $field <p>
	 * The name of the backup field
	 * </p>
	 * @param string $field_override [optional] <p>
	 * Name of the field
	 * </p>
	 * @return SolrQuery <p>
	 * Returns the current SolrQuery object, if the return value is used.
	 * </p>
	 */
	public function setHighlightAlternateField($field, $field_override) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Specify a formatter for the highlight output
	 * @link http://php.net/manual/en/solrquery.sethighlightformatter.php
	 * @param string $formatter <p>
	 * Currently the only legal value is "simple"
	 * </p>
	 * @param string $field_override [optional] <p>
	 * Name of the field
	 * </p>
	 * @return SolrQuery <p>
	 * Returns the current SolrQuery object, if the return value is used.
	 * </p>
	 */
	public function setHighlightFormatter($formatter, $field_override) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Sets a text snippet generator for highlighted text
	 * @link http://php.net/manual/en/solrquery.sethighlightfragmenter.php
	 * @param string $fragmenter <p>
	 * The standard fragmenter is gap. Another option is regex, which tries to create fragments that resembles a certain
	 * regular expression
	 * </p>
	 * @param string $field_override [optional] <p>
	 * Name of the field
	 * </p>
	 * @return SolrQuery <p>
	 * Returns the current SolrQuery object, if the return value is used.
	 * </p>
	 */
	public function setHighlightFragmenter($fragmenter, $field_override) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * The size of fragments to consider for highlighting
	 * @link http://php.net/manual/en/solrquery.sethighlightfragsize.php
	 * @param int $size <p>
	 * The size, in characters, of fragments to consider for highlighting
	 * </p>
	 * @param string $field_override [optional] <p>
	 * Name of the field
	 * </p>
	 * @return SolrQuery <p>
	 * Returns the current SolrQuery object, if the return value is used.
	 * </p>
	 */
	public function setHighlightFragsize($size, $field_override) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Use SpanScorer to highlight phrase terms
	 * @link http://php.net/manual/en/solrquery.sethighlighthighlightmultiterm.php
	 * @param bool $flag <p>
	 * Whether or not to use SpanScorer to highlight phrase terms only when they appear within the query phrase in the
	 * document.
	 * </p>
	 * @return SolrQuery <p>
	 * Returns the current SolrQuery object, if the return value is used.
	 * </p>
	 */
	public function setHighlightHighlightMultiTerm($flag) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Sets the maximum number of characters of the field to return
	 * @link http://php.net/manual/en/solrquery.sethighlightmaxalternatefieldlength.php
	 * @param string $fieldLength <p>
	 * The length of the field
	 * </p>
	 * <p>
	 * If SolrQuery::setHighlightAlternateField() was passed the value <b>TRUE</b>, this parameter specifies the maximum
	 * number of characters of the field to return
	 * </p>
	 * <p>
	 * Any value less than or equal to 0 means unlimited.
	 * </p>
	 * @param string $field_override [optional] <p>
	 * Name of the field
	 * </p>
	 * @return SolrQuery <p>
	 * Returns the current SolrQuery object, if the return value is used.
	 * </p>
	 */
	public function setHighlightMaxAlternateFieldLength($fieldLength, $field_override) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Specifies the number of characters into a document to look for suitable snippets
	 * @link http://php.net/manual/en/solrquery.sethighlightmaxanalyzedchars.php
	 * @param int $value <p>
	 * The number of characters into a document to look for suitable snippets
	 * </p>
	 * @return SolrQuery <p>
	 * Returns the current SolrQuery object, if the return value is used.
	 * </p>
	 */
	public function setHighlightMaxAnalyzedChars($value) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Whether or not to collapse contiguous fragments into a single fragment
	 * @link http://php.net/manual/en/solrquery.sethighlightmergecontiguous.php
	 * @param bool $flag <p>
	 * Whether or not to collapse contiguous fragments into a single fragment
	 * </p>
	 * @param string $field_override [optional] <p>
	 * Name of the field
	 * </p>
	 * @return SolrQuery <p>
	 * Returns the current SolrQuery object, if the return value is used.
	 * </p>
	 */
	public function setHighlightMergeContiguous($flag, $field_override) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Specify the maximum number of characters to analyze
	 * @link http://php.net/manual/en/solrquery.sethighlightregexmaxanalyzedchars.php
	 * @param int $maxAnalyzedChars <p>
	 * The maximum number of characters to analyze from a field when using the regex fragmenter
	 * </p>
	 * @return SolrQuery <p>
	 * Returns the current SolrQuery object, if the return value is used.
	 * </p>
	 */
	public function setHighlightRegexMaxAnalyzedChars($maxAnalyzedChars) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Specify the regular expression for fragmenting
	 * @link http://php.net/manual/en/solrquery.sethighlightregexpattern.php
	 * @param string $value <p>
	 * The regular expression for fragmenting. This could be used to extract sentences
	 * </p>
	 * @return SolrQuery <p>
	 * Returns the current SolrQuery object, if the return value is used.
	 * </p>
	 */
	public function setHighlightRegexPattern($value) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Sets the factor by which the regex fragmenter can stray from the ideal fragment size
	 * @link http://php.net/manual/en/solrquery.sethighlightregexslop.php
	 * @param float $factor <p>
	 * The factor by which the regex fragmenter can stray from the ideal fragment size (specfied by
	 * SolrQuery::setHighlightFragsize) to accommodate the regular expression.
	 * </p>
	 * @return SolrQuery <p>
	 * Returns the current SolrQuery object, if the return value is used.
	 * </p>
	 */
	public function setHighlightRegexSlop($factor) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Require field matching during highlighting
	 * @link http://php.net/manual/en/solrquery.sethighlightrequirefieldmatch.php
	 * @param bool $flag <p>
	 * If <b>TRUE</b>, then a field will only be highlighted if the query matched in this particular field.<br/>
	 * This will only work if SolrQuery::setHighlightUsePhraseHighlighter() was set to <b>TRUE</b>.
	 * </p>
	 * @return SolrQuery <p>
	 * Returns the current SolrQuery object, if the return value is used.
	 * </p>
	 */
	public function setHighlightRequireFieldMatch($flag) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Sets the text which appears after a highlighted term
	 * @link http://php.net/manual/en/solrquery.sethighlightsimplepost.php
	 * @param string $simplePost <p>
	 * Sets the text which appears after a highlighted term. The default is &lt;/em&gt;
	 * </p>
	 * @param string $field_override [optional] <p>
	 * Name of the field
	 * </p>
	 * @return SolrQuery <p>
	 * Returns the current SolrQuery object, if the return value is used.
	 * </p>
	 */
	public function setHighlightSimplePost($simplePost, $field_override) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Sets the text which appears before a highlighted term
	 * @link http://php.net/manual/en/solrquery.sethighlightsimplepre.php
	 * @param string $simplePre <p>
	 * Sets the text which appears before a highlighted term. The default is &lt;em&gt;
	 * </p>
	 * @param string $field_override [optional] <p>
	 * Name of the field
	 * </p>
	 * @return SolrQuery <p>
	 * Returns the current SolrQuery object, if the return value is used.
	 * </p>
	 */
	public function setHighlightSimplePre($simplePre, $field_override) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Sets the maximum number of highlighted snippets to generate per field
	 * @link http://php.net/manual/en/solrquery.sethighlightsnippets.php
	 * @param int $value <p>
	 * The maximum number of highlighted snippets to generate per field
	 * </p>
	 * @param string $field_override [optional] <p>
	 * Name of the field
	 * </p>
	 * @return SolrQuery <p>
	 * Returns the current SolrQuery object, if the return value is used.
	 * </p>
	 */
	public function setHighlightSnippets($value, $field_override) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Whether to highlight phrase terms only when they appear within the query phrase
	 * @link http://php.net/manual/en/solrquery.sethighlightusephrasehighlighter.php
	 * @param bool $flag <p>
	 * Whether or not to use SpanScorer to highlight phrase terms only when they appear within the query phrase in the
	 * document.
	 * </p>
	 * @return SolrQuery <p>
	 * Returns the current SolrQuery object, if the return value is used.
	 * </p>
	 */
	public function setHighlightUsePhraseHighlighter($flag) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Enables or disables moreLikeThis
	 * @link http://php.net/manual/en/solrquery.setmlt.php
	 * @param bool $flag <p>
	 * <b>TRUE</b> enables it and <b>FALSE</b> turns it off.
	 * </p>
	 * @return SolrQuery <p>
	 * Returns the current SolrQuery object, if the return value is used.
	 * </p>
	 */
	public function setMlt($flag) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Set if the query will be boosted by the interesting term relevance
	 * @link http://php.net/manual/en/solrquery.setmltboost.php
	 * @param bool $flag <p>
	 * Sets to <b>TRUE</b> or <b>FALSE</b>
	 * </p>
	 * @return SolrQuery <p>
	 * Returns the current SolrQuery object, if the return value is used.
	 * </p>
	 */
	public function setMltBoost($flag) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Set the number of similar documents to return for each result
	 * @link http://php.net/manual/en/solrquery.setmltcount.php
	 * @param int $count <p>
	 * The number of similar documents to return for each result
	 * </p>
	 * @return SolrQuery <p>
	 * Returns the current SolrQuery object, if the return value is used.
	 * </p>
	 */
	public function setMltCount($count) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Sets the maximum number of query terms included
	 * @link http://php.net/manual/en/solrquery.setmltmaxnumqueryterms.php
	 * @param int $value <p>
	 * The maximum number of query terms that will be included in any generated query
	 * </p>
	 * @return SolrQuery <p>
	 * Returns the current SolrQuery object, if the return value is used.
	 * </p>
	 */
	public function setMltMaxNumQueryTerms($value) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Specifies the maximum number of tokens to parse
	 * @link http://php.net/manual/en/solrquery.setmltmaxnumtokens.php
	 * @param int $value <p>
	 * The maximum number of tokens to parse
	 * </p>
	 * @return SolrQuery <p>
	 * Returns the current SolrQuery object, if the return value is used.
	 * </p>
	 */
	public function setMltMaxNumTokens($value) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Sets the maximum word length
	 * @link http://php.net/manual/en/solrquery.setmltmaxwordlength.php
	 * @param int $maxWordLength <p>
	 * The maximum word length above which words will be ignored
	 * </p>
	 * @return SolrQuery <p>
	 * Returns the current SolrQuery object, if the return value is used.
	 * </p>
	 */
	public function setMltMaxWordLength($maxWordLength) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Sets the mltMinDoc frequency
	 * @link http://php.net/manual/en/solrquery.setmltmindocfrequency.php
	 * @param int $minDocFrequency <p>
	 * Sets the frequency at which words will be ignored which do not occur in at least this many docs.
	 * </p>
	 * @return SolrQuery <p>
	 * Returns the current SolrQuery object, if the return value is used.
	 * </p>
	 */
	public function setMltMinDocFrequency($minDocFrequency) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Sets the frequency below which terms will be ignored in the source docs
	 * @link http://php.net/manual/en/solrquery.setmltmintermfrequency.php
	 * @param int $minTermFrequency <p>
	 * The frequency below which terms will be ignored in the source docs
	 * </p>
	 * @return SolrQuery <p>
	 * Returns the current SolrQuery object, if the return value is used.
	 * </p>
	 */
	public function setMltMinTermFrequency($minTermFrequency) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Sets the minimum word length
	 * @link http://php.net/manual/en/solrquery.setmltminwordlength.php
	 * @param int $minWordLength <p>
	 * The minimum word length below which words will be ignored
	 * </p>
	 * @return SolrQuery <p>
	 * Returns the current SolrQuery object, if the return value is used.
	 * </p>
	 */
	public function setMltMinWordLength($minWordLength) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Exclude the header from the returned results
	 * @link http://php.net/manual/en/solrquery.setomitheader.php
	 * @param bool $flag <p>
	 * <b>TRUE</b> excludes the header from the result.
	 * </p>
	 * @return SolrQuery <p>
	 * Returns the current SolrQuery object, if the return value is used.
	 * </p>
	 */
	public function setOmitHeader($flag) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Sets the search query
	 * @link http://php.net/manual/en/solrquery.setquery.php
	 * @param string $query <p>
	 * The search query
	 * </p>
	 * @return SolrQuery <p>
	 * Returns the current SolrQuery object, if the return value is used.
	 * </p>
	 */
	public function setQuery($query) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Specifies the maximum number of rows to return in the result
	 * @link http://php.net/manual/en/solrquery.setrows.php
	 * @param int $rows <p>
	 * The maximum number of rows to return
	 * </p>
	 * @return SolrQuery <p>
	 * Returns the current SolrQuery object, if the return value is used.
	 * </p>
	 */
	public function setRows($rows) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Flag to show debug information
	 * @link http://php.net/manual/en/solrquery.setshowdebuginfo.php
	 * @param bool $flag <p>
	 * Whether to show debug info. <b>TRUE</b> or <b>FALSE</b>
	 * </p>
	 * @return SolrQuery <p>
	 * Returns the current SolrQuery object, if the return value is used.
	 * </p>
	 */
	public function setShowDebugInfo($flag) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Specifies the number of rows to skip
	 * @link http://php.net/manual/en/solrquery.setstart.php
	 * @param int $start <p>
	 * The number of rows to skip.
	 * </p>
	 * @return SolrQuery <p>
	 * Returns the current SolrQuery object, if the return value is used.
	 * </p>
	 */
	public function setStart($start) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Enables or disables the Stats component
	 * @link http://php.net/manual/en/solrquery.setstats.php
	 * @param bool $flag <p>
	 * <b>TRUE</b> turns on the stats component and <b>FALSE</b> disables it.
	 * </p>
	 * @return SolrQuery <p>
	 * Returns the current SolrQuery object, if the return value is used.
	 * </p>
	 */
	public function setStats($flag) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Enables or disables the TermsComponent
	 * @link http://php.net/manual/en/solrquery.setterms.php
	 * @param bool $flag <p>
	 * <b>TRUE</b> enables it. <b>FALSE</b> turns it off
	 * </p>
	 * @return SolrQuery <p>
	 * Returns the current SolrQuery object, if the return value is used.
	 * </p>
	 */
	public function setTerms($flag) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Sets the name of the field to get the Terms from
	 * @link http://php.net/manual/en/solrquery.settermsfield.php
	 * @param string $fieldname <p>
	 * The field name
	 * </p>
	 * @return SolrQuery <p>
	 * Returns the current SolrQuery object, if the return value is used.
	 * </p>
	 */
	public function setTermsField($fieldname) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Include the lower bound term in the result set
	 * @link http://php.net/manual/en/solrquery.settermsincludelowerbound.php
	 * @param bool $flag <p>
	 * Include the lower bound term in the result set
	 * </p>
	 * @return SolrQuery <p>
	 * Returns the current SolrQuery object, if the return value is used.
	 * </p>
	 */
	public function setTermsIncludeLowerBound($flag) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Include the upper bound term in the result set
	 * @link http://php.net/manual/en/solrquery.settermsincludeupperbound.php
	 * @param bool $flag <p>
	 * <b>TRUE</b> or <b>FALSE</b>
	 * </p>
	 * @return SolrQuery <p>
	 * Returns the current SolrQuery object, if the return value is used.
	 * </p>
	 */
	public function setTermsIncludeUpperBound($flag) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Sets the maximum number of terms to return
	 * @link http://php.net/manual/en/solrquery.settermslimit.php
	 * @param int $limit <p>
	 * The maximum number of terms to return. All the terms will be returned if the limit is negative.
	 * </p>
	 * @return SolrQuery <p>
	 * Returns the current SolrQuery object, if the return value is used.
	 * </p>
	 */
	public function setTermsLimit($limit) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Specifies the Term to start from
	 * @link http://php.net/manual/en/solrquery.settermslowerbound.php
	 * @param string $lowerBound <p>
	 * The lower bound Term
	 * </p>
	 * @return SolrQuery <p>
	 * Returns the current SolrQuery object, if the return value is used.
	 * </p>
	 */
	public function setTermsLowerBound($lowerBound) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Sets the maximum document frequency
	 * @link http://php.net/manual/en/solrquery.settermsmaxcount.php
	 * @param int $frequency <p>
	 * The maximum document frequency.
	 * </p>
	 * @return SolrQuery <p>
	 * Returns the current SolrQuery object, if the return value is used.
	 * </p>
	 */
	public function setTermsMaxCount($frequency) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Sets the minimum document frequency
	 * @link http://php.net/manual/en/solrquery.settermsmincount.php
	 * @param int $frequency <p>
	 * The minimum frequency
	 * </p>
	 * @return SolrQuery <p>
	 * Returns the current SolrQuery object, if the return value is used.
	 * </p>
	 */
	public function setTermsMinCount($frequency) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Restrict matches to terms that start with the prefix
	 * @link http://php.net/manual/en/solrquery.settermsprefix.php
	 * @param string $prefix <p>
	 * Restrict matches to terms that start with the prefix
	 * </p>
	 * @return SolrQuery <p>
	 * Returns the current SolrQuery object, if the return value is used.
	 * </p>
	 */
	public function setTermsPrefix($prefix) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Return the raw characters of the indexed term
	 * @link http://php.net/manual/en/solrquery.settermsreturnraw.php
	 * @param bool $flag <p>
	 * <b>TRUE</b> or <b>FALSE</b>
	 * </p>
	 * @return SolrQuery <p>
	 * Returns the current SolrQuery object, if the return value is used.
	 * </p>
	 */
	public function setTermsReturnRaw($flag) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Specifies how to sort the returned terms
	 * @link http://php.net/manual/en/solrquery.settermssort.php
	 * @param int $sortType <p>
	 * If SolrQuery::TERMS_SORT_COUNT, sorts the terms by the term frequency (highest count first).<br/>
	 * If SolrQuery::TERMS_SORT_INDEX, returns the terms in index order
	 * </p>
	 * @return SolrQuery <p>
	 * Returns the current SolrQuery object, if the return value is used.
	 * </p>
	 */
	public function setTermsSort($sortType) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * Sets the term to stop at
	 * @link http://php.net/manual/en/solrquery.settermsupperbound.php
	 * @param string $upperBound <p>
	 * The term to stop at
	 * </p>
	 * @return SolrQuery <p>
	 * Returns the current SolrQuery object, if the return value is used.
	 * </p>
	 */
	public function setTermsUpperBound($upperBound) {}

	/**
	 * (PECL solr &gt;= 0.9.2)<br/>
	 * The time allowed for search to finish
	 * @link http://php.net/manual/en/solrquery.settimeallowed.php
	 * @param int $timeAllowed <p>
	 * The time allowed for a search to finish. This value only applies to the search and not to requests in general.
	 * Time is in milliseconds. Values less than or equal to zero implies no time restriction. Partial results may be
	 * returned, if there are any.
	 * </p>
	 * @return SolrQuery <p>
	 * Returns the current SolrQuery object, if the return value is used.
	 * </p>
	 */
	public function setTimeAllowed($timeAllowed) {}

}