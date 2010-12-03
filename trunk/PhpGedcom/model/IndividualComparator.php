<?php 
namespace PhpGedcom;
/**
 * Compare 2 individuals to see how closely they match to each other
 * 
 * PhpGedcom Library - Ported from JavaGedcom Library
 * Copyright (C) 2010	John Finlay
 *
 * This library is free software; you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation; either
 * version 2.1 of the License, or (at your option) any later version.
 *
 * This library is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Lesser General Public License for more details.
 *
 * See LICENSE.txt for the full license.  If you did not receive a
 * copy of the license with this code, you may find a copy online
 * at http://www.opensource.org/licenses/lgpl-license.php
 * 
 * @author jfinlay
 *
 */
class IndividualComparator {

	/**
	 * Compare 2 individuals
	 * @param i1	Individual
	 * @param i2	Individual
	 * @return	a double between 0 and 1 indicating how closely the 2 individuals match
	 */
	public function compare($i1, $i2) {
		$probability = 0.0;
		
		$score = 0;
		$total = 0;
		
		//-- individuals are exactly the same
		if ($i1->getFile()==$i2->getFile() && $i1->getGedcomId()==$i2->getGedcomId()) return 1;
		
		//-- check Name records
		$name1 = $i1->getName();
		$name2 = $i2->getName();
		//-- check surname
		$total+=5;
		if ($name1!=null 
				&& $name2 !=null 
				&& $name1->getSurName()!=null 
				&& $name2->getSurName()!=null 
				&& strcasecmp($name1->getSurName(), $name2.getSurName())==0) 
			$score+=5;
		
		//-- check given names
		$givn1 = preg_split("/ +/", $name1->getGivnName());
		$givn1 = preg_split("/ +/", $name2->getGivnName());
		foreach($givn1 as $g1) {
			foreach($givn2 as $g2) {
				$total++;
				if (strcasecmp($g1, $g2)==0) $score++;
			}
		}
		
		//-- check birth info
		$b1 = $i1->getBirthEvent();
		$b2 = $i2->getBirthEvent();
		$v = $this->compareEvents($b1, $b2);
		$total+=$v[0];
		$score+=$v[1];
		
		//-- check death info
		$d1 = $i1->getDeathEvent();
		$d2 = $i2->getDeathEvent();
		$v = $this->compareEvents($d1, $d2);
		$total+=$v[0];
		$score+=$v[1];
		
		$probability = $score/$total;
		
		return $probability;
	}
	
	/**
	 * Compare 2 events
	 * @param e1
	 * @param e2
	 * @return an array with the first element the total number of comparisons and the second element the score
	 */
	public function compareEvents($e1, $e2) {
		$total = 0;
		$score = 0;
		if ($e1!=null && $e2!=null) {
			//-- check birth year
			$total+=2;
			$y1 = $e1->getDate()->getYear();
			$y2 = $e2->getDate()->getYear();
			$yearPass = false;
			if ($y1 == $y2) {
				$score+=2;
				$yearPass = true;
			}
			else if ($y1 > $y2-3 && $y1 < $y2+3) {
				$score+=1;
				$yearPass = true;
			}
			
			//-- check month
			$total+=3;
			if ($yearPass) {
				if ($e1->getDate()->getMonth()==$e2->getDate()->getMonth()) {
					$score+=1;
					//-- check date
					$d1 = $e1->getDate()->getDay();
					$d2 = $e2->getDate()->getDay();
					if ($d1==$d2) $score+=2;
					else if ($d1 > $d2-3 && $d2 < $d2+3) $score+=1;
				}
			}
		}
		else {
			$total+=2;
		}
		
		//-- check place
		if ($e1->getPlace()!=null && $e2->getPlace()!=null) {
			$p1 = preg_split("/, */", $e1->getPlace());
			$p2 = preg_split("/, */", $e2->getPlace());
			$k = 1;
			for ($i = count($p1)-1; $i>=0 ; $i--) {
				$j = count($p2)-$k;
				$total+=$i;
				if (strcasecmp($p1[$i],$p2[$j])==0) $score+=$i;
				$k++;
			}
		}
		
		$ret = array($total, $score);
		return $ret;
	}
}
?>