<?php namespace api\method;

use api\response\Error;
use api\inline\InlineQueryResult;

/**
 * Class answerInlineQuery
 * @package api\method
 * @link https://core.telegram.org/bots/api#answerinlinequery
 *
 * @author Mehdi Khodayari <khodayari.khoram@gmail.com>
 * @since 3.4
 *
 * @property string inline_query_id
 * @property InlineQueryResult[] results
 * @property int cache_time
 * @property bool is_personal
 * @property string next_offset
 * @property string switch_pm_text
 * @property string switch_pm_parameter
 *
 * @method true|Error send()
 * @method bool hasInlineQueryId()
 * @method bool hasResults()
 * @method bool hasCacheTime()
 * @method bool hasIsPersonal()
 * @method bool hasNextOffset()
 * @method bool hasSwitchPmText()
 * @method bool hasSwitchPmParameter()
 * @method $this setInlineQueryId($string)
 * @method $this setResults($array)
 * @method $this setCacheTime($integer)
 * @method $this setIsPersonal($boolean)
 * @method $this setNextOffset($string)
 * @method $this setSwitchPmText($string)
 * @method $this setSwitchPmParameter($string)
 * @method $this remInlineQueryId()
 * @method $this remResults()
 * @method $this remCacheTime()
 * @method $this remIsPersonal()
 * @method $this remNextOffset()
 * @method $this remSwitchPmText()
 * @method $this remSwitchPmParameter()
 * @method string getInlineQueryId()
 * @method array|InlineQueryResult[] getResults()
 * @method int getCacheTime()
 * @method bool getIsPersonal()
 * @method string getNextOffset()
 * @method string getSwitchPmText()
 * @method string getSwitchPmParameter()
 */
class answerInlineQuery extends Method
{

    /**
     * every methods have a response.
     * @return string the name of response class
     */
    protected function response()
    {
        return true;
    }
}