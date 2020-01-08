# sample2
Extended time and date format project

Experimental module for generate time and date intervals for truncated and incomplete times and dates.
Useful when we would like to arrange historical events or just if we have a huge amount of old photo :)
Non eventual version!

  <p>
      <strong>Dates, times</strong>
  <ul>
      <li><code>'1985-04-12'</code> <i>means 1985 April 12th</i></li>
      <li><code>'1985-04'</code> <i>means 1985 April</i></li>
      <li><code>'1985'</code> <i>means 1985</i></li>
      <li><code>'1985-04-12T23:20:30'</code> <i>means 1985 April 12th at 23:20:30</i></li>
  </ul>
  </p>
  <p>
  <strong>Sub-year groupings</strong><br>
  <ul>
      <li><code>'21'</code> <i>means Spring (independent of location)</i></li>
      <li><code>'22'</code> <i>means Summer (independent of location)</i></li>
      <li><code>'23'</code> <i>means Autumn (independent of location)</i></li>
      <li><code>'24'</code> <i>means Winter (independent of location)</i></li>
      <li><code>'25'</code> <i>means Spring - Northern Hemisphere</i></li>
      <li><code>'26'</code> <i>means Summer - Northern Hemisphere</i></li>
      <li><code>'27'</code> <i>means Autumn - Northern Hemisphere</i></li>
      <li><code>'28'</code> <i>means Winter - Northern Hemisphere</i></li>
      <li><code>'29'</code> <i>means Spring - Southern Hemisphere</i></li>
      <li><code>'30'</code> <i>means Summer - Southern Hemisphere</i></li>
      <li><code>'31'</code> <i>means Autumn - Southern Hemisphere</i></li>
      <li><code>'32'</code> <i>means Winter - Southern Hemisphere</i></li>
      <li><code>'33'</code> <i>means Quarter 1 (3 months in duration)</i></li>
      <li><code>'34'</code> <i>means Quarter 2 (3 months in duration)</i></li>
      <li><code>'35'</code> <i>means Quarter 3 (3 months in duration)</i></li>
      <li><code>'36'</code> <i>means Quarter 4 (3 months in duration)</i></li>
      <li><code>'37'</code> <i>means Quadrimester 1 (4 months in duration)</i></li>
      <li><code>'38'</code> <i>means Quadrimester 2 (4 months in duration)</i></li>
      <li><code>'39'</code> <i>means Quadrimester 3 (4 months in duration)</i></li>
      <li><code>'40'</code> <i>means Semestral 1 (6 months in duration)</i></li>
      <li><code>'41'</code> <i>means Semestral 2 (6 months in duration)</i></li>
  </ul>
  Examples:
  <ul>
      <li><code>'2001-21'</code> <i>means Spring, 2001</i></li>
      <li><code>'2001-34'</code> <i>means second quarter of 2001</i></li>
  </ul>
  <p>
      <strong>Qualification of a date</strong><br>
      The characters '?', '~' and '%' are used to mean "uncertain", "approximate", and "uncertain" as well as "approximate", respectively. These characters may occur only at the end of the date string and apply to the entire date.
  <ul>
      <li><code>'1984?'</code> <i>means year uncertain (possibly the year 1984, but not definitely)</i></li>
      <li><code>'2004-06~'</code> <i>means year-month approximate</i></li>
      <li><code>'2004-06~-11'</code> <i>means year-month approximate</i></li>
      <li><code>'2004?-06-11'</code> <i>means year uncertain</i></li>
      <li><code>'2004-06-11%'</code> <i>means entire date (year-month-day) uncertain and approximate</i></li>
      <li><code>'1984?'</code> <i>means year uncertain (possibly the year 1984, but not definitely)</i></li>
      <li><code>'?2004-06-~11'</code> <i>means year uncertain; month known; day approximate</i></li>
      <li><code>'2004-%06-11'</code> <i>means month uncertain and approximate; year and day known</i></li>
  </ul>
  </p>
  <p>
      <strong>Unspecified digit(s)</strong><br>
      The character 'X' may be used in place of one or more rightmost digits to indicate that the value of that digit is unspecified, for the following cases:
  <ul>
      <li><code>‘201X’</code> <i>means some year during the 2010s</i></li>
      <li><code>‘20XX’</code> <i>means  some year during the 2100s</i></li>
      <li><code>‘2004-XX’</code> <i>means some month during the 2004</i></li>
      <li><code>‘1985-04-XX’</code> <i>means means some day during the April 2004</i></li>
      <li><code>‘1985-XX-XX’</code> <i>means some day and month in 1985</i></li>
      <li><code>'156X-12-25'</code> <i>means December 25 sometime during the 1560s</i></li>
      <li><code>'15XX-12-25'</code> <i>means December 25 sometime during the 1500s</i></li>
      <li><code>'XXXX-12-XX'</code> <i>means some day in December in some year</i></li>
      <li><code>'1XXX-XX'</code> <i>means some month during the 1000s</i></li>
      <li><code>'1XXX-12'</code> <i>means some December during the 1000s</i></li>
      <li><code>'1984-1X'</code> <i>means October, November, or December 1984</i></li>
  </ul>
  </p>
  <p>
      <strong>Intervals</strong>
  <ul>
      <li><code>'1964/2008'</code> <i>means beginning sometime in 1964 and ending sometime in 2008</i></li>
      <li><code>'2004-06/2006-08'</code> <i>means beginning sometime in June 2004 and ending sometime in August of 2006</i></li>
      <li><code>'2004-02-01/2005-02-08'</code> <i>means beginning sometime on February 1, 2004 and ending sometime on February 8, 2005</i></li>
      <li><code>'2004-02-01/2005-02'</code> <i>means beginning sometime on February 1, 2004 and ending sometime in February 2005</i></li>
      <li><code>'2004-02-01/2005'</code> <i>means sometime on February 1, 2004 and ending sometime in 2005</i></li>
      <li><code>'1985-04-12/..'</code> <i>means interval starting at 1985 April 12th with day precision; end open</i></li>
      <li><code>'1985-04/..'</code> <i>means interval starting at 1985 April with month precision; end open</i></li>
      <li><code>'1985/..'</code> <i>means interval starting at year 1985 with year precision; end open</i></li>
      <li><code>'../1985-04-12'</code> <i>means interval with open start; ending 1985 April 12th with day precision</i></li>
      <li><code>'../1985-04'</code> <i>means interval with open start; ending 1985 April with month precision</i></li>
      <li><code>'../1985'</code> <i>means interval with open start; ending at year 1985 with year precision</i></li>
      <li><code>'1985-04-12/'</code> <i>means interval starting 1985 April 12th with day precision; end unknown</i></li>
      <li><code>'1985-04/'</code> <i>means interval starting 1985 April with month precision; end unknown</i></li>
      <li><code>'1985/'</code> <i>means interval starting year 1985 with year precision; end unknown</i></li>
      <li><code>'/1985-04-12'</code> <i>means interval with unknown start; ending 1985 April 12th with day precision</i></li>
      <li><code>'/1985-04'</code> <i>means interval with unknown start; ending 1985 April with month precision</i></li>
      <li><code>'/1985'</code> <i>means interval with unknown start; ending year 1985 with year precision</i></li>
      <li><code>'2004-06-~01/2004-06-~20'</code> <i>means an interval in June 2004 beginning approximately the first and ending approximately the 20th</i></li>
      <li><code>'2004-06-XX/2004-07-03'</code> <i>means an interval beginning on an unspecified day in June 2004 and ending July 3.</i></li>
  </ul>
  </p>
  <p>
      <strong>Set representation</strong><br>
  <ul>
      <li><i>Square brackets wrap a single-choice list (select one member).</i></li>
      <li><i>Curly brackets wrap an inclusive list (all members included).</i></li>
      <li><i>Members of the set are separated by commas.</i></li>
      <li><i>No spaces are allowed, anywhere within the expression.</i></li>
      <li><i>Double-dots indicates all the values between the two values it separates, inclusive.</i></li>
      <li><i>Double-dot at the beginning or end of the list means "on or before" or "on or after" respectively.</i></li>
      <li><i>Elements immediately preceeding and/or following as well as the elements represented by a double-dot, all have the same precision. Otherwise, different elements may have different precisions.</i></li>
  </ul>
  Examples:
  <ul>
      <li><code>'[1667,1668,1670..1672]'</code> <i>means one of the years 1667, 1668, 1670, 1671, 1672</i></li>
      <li><code>'[..1760-12-03]'</code> <i>means December 3, 1760; or some earlier date</i></li>
      <li><code>'[1760-12..]'</code> <i>means December 1760, or some later month</i></li>
      <li><code>'[1760-01,1760-02,1760-12..] '</code> <i>means January or February of 1760 or December 1760 or some later month</i></li>
      <li><code>'[1667,1760-12]'</code> <i>means either the year 1667 or the month December of 1760.</i></li>
      <li><code>'[..1984]'</code> <i>means the year 1984 or an earlier year</i></li>
      <li><code>'{1667,1668,1670..1672}'</code> <i>means all of the years 1667, 1668, 1670, 1671, 1672</i></li>
      <li><code>'{1960,1961-12}'</code> <i>means the year 1960 and the month December of 1961.</i></li>
      <li><code>'{..1984}'</code> <i>means the year 1984 and all earlier years</i></li>
  </ul>
  <p>
