<?php namespace api\method;

use api\response\Error;
use api\response\Message;
use api\keyboard\Keyboard;

/**
 * Class sendLocation
 * @package api\method
 * @link https://core.telegram.org/bots/api#sendlocation
 *
 * @author Mehdi Khodayari <khodayari.khoram@gmail.com>
 * @since 3.4
 *
 * @property int|string chat_id
 * @property float latitude
 * @property float longitude
 * @property int live_period
 * @property bool disable_notification
 * @property int reply_to_message_id
 * @property Keyboard reply_markup
 *
 * @method Message|Error send()
 * @method bool hasChatId()
 * @method bool hasLatitude()
 * @method bool hasLongitude()
 * @method bool hasLivePeriod()
 * @method bool hasDisableNotification()
 * @method bool hasReplyToMessageId()
 * @method bool hasReplyMarkup()
 * @method $this setChatId($integer)
 * @method $this setLatitude($float)
 * @method $this setLongitude($float)
 * @method $this setLivePeriod($integer)
 * @method $this setDisableNotification($boolean)
 * @method $this setReplyToMessageId($integer)
 * @method $this setReplyMarkup($markup)
 * @method $this remChatId()
 * @method $this remLatitude()
 * @method $this remLongitude()
 * @method $this remLivePeriod()
 * @method $this remDisableNotification()
 * @method $this remReplyToMessageId()
 * @method $this remReplyMarkup()
 * @method string|int getChatId($default = null)
 * @method float getLatitude($default = null)
 * @method float getLongitude($default = null)
 * @method int getLivePeriod($default = null)
 * @method bool getDisableNotification($default = null)
 * @method int getReplyToMessageId($default = null)
 * @method Keyboard getReplyMarkup($default = null)
 */
class sendLocation extends Method
{

    /**
     * Every method have a response type.
     * @return string the class's name.
     */
    protected function response()
    {
        return Message::className();
    }
}