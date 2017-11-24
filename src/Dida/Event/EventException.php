<?php
/**
 * Dida Framework  -- A Rapid Development Framework
 * Copyright (c) Zeupin LLC. (http://zeupin.com)
 *
 * Licensed under The MIT License.
 * Redistributions of files must retain the above copyright notice.
 */

namespace Dida\Event;

/**
 * EventException
 */
class EventException extends \Exception
{
    /**
     * Version
     */
    const VERSION = '20171124';

    // --------------------------------------------------------------------------------
    // EventBus 类
    // --------------------------------------------------------------------------------

    /**
     * 事件未找到
     */
    const EVENT_NOT_FOUND = 1001;

}
