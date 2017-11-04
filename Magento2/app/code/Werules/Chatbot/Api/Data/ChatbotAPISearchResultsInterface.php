<?php
/**
 * Magento Chatbot Integration
 * Copyright (C) 2017  
 * 
 * This file is part of Werules/Chatbot.
 * 
 * Werules/Chatbot is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 * 
 * You should have received a copy of the GNU General Public License
 * along with this program. If not, see <http://www.gnu.org/licenses/>.
 */

namespace Werules\Chatbot\Api\Data;

interface ChatbotAPISearchResultsInterface extends \Magento\Framework\Api\SearchResultsInterface
{


    /**
     * Get ChatbotAPI list.
     * @return \Werules\Chatbot\Api\Data\ChatbotAPIInterface[]
     */
    public function getItems();

    /**
     * Set enabled list.
     * @param \Werules\Chatbot\Api\Data\ChatbotAPIInterface[] $items
     * @return $this
     */
    public function setItems(array $items);
}
