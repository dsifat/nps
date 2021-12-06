"use strict";

function _instanceof(left, right) { if (right != null && typeof Symbol !== "undefined" && right[Symbol.hasInstance]) { return right[Symbol.hasInstance](left); } else { return left instanceof right; } }

function _classCallCheck(instance, Constructor) { if (!_instanceof(instance, Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }

var Cronexpression =
/*#__PURE__*/
function () {
  function Cronexpression() {
    _classCallCheck(this, Cronexpression);

    this.setAllOn();
    this.cronEx = new RegExp("^" + this.prePareRegex());
    ;
  }

  _createClass(Cronexpression, [{
    key: "minuteEx",
    value: function minuteEx() {
      var alpha = "([1-5]?[0-9])";
      var beta = "([*]((\/" + alpha + ")?))";
      var gamma = "(" + alpha + "(((-" + alpha + ")?)((\/" + alpha + ")?)))";
      return "(" + gamma + "|" + beta + ")(([,](" + gamma + "|" + beta + "))*)";
    }
  }, {
    key: "hoursEx",
    value: function hoursEx() {
      var alpha = "((2[0-3])|([1]?[0-9]))";
      var beta = "([*]((\/" + alpha + ")?))";
      var gamma = "(" + alpha + "(((-" + alpha + ")?)((\/" + alpha + ")?)))";
      return "((" + beta + "|" + gamma + ")(([,](" + beta + "|" + gamma + "))*))";
    }
  }, {
    key: "dayMonthEx",
    value: function dayMonthEx() {
      var alpha = "((3[01])|([12]?[0-9]))";
      var beta = "([*]((\/" + alpha + ")?))";
      var gamma = "(" + alpha + "(((-" + alpha + ")?)((\/" + alpha + ")?)))";
      return "(((" + alpha + "|(L)?)[W])|(L)|((" + gamma + "|" + beta + ")(([,](" + gamma + "|" + beta + "))*)))";
    }
  }, {
    key: "dayWeekEx",
    value: function dayWeekEx() {
      var alpha = "([0-7])";
      var beta = "([*](\/" + alpha + ")?)";
      var gamma = "(((-" + alpha + ")?)((\/" + alpha + ")?))";
      return "((" + alpha + "#" + alpha + ")|(" + alpha + "?(L))|((" + beta + "|(" + alpha + "" + gamma + "))(([,](" + beta + "|(" + alpha + "" + gamma + ")))*)))";
    }
  }, {
    key: "monthEx",
    value: function monthEx() {
      var alpha = "((1([0-2]?))|([2-9]))";
      var beta = "([*]((\/" + alpha + ")?))";
      var gamma = "(" + alpha + "(((-" + alpha + ")?)((\/" + alpha + ")?)))";
      return "((" + beta + "|" + gamma + ")((([,](" + beta + "|" + gamma + ")))*))";
    }
  }, {
    key: "prePareRegex",
    value: function prePareRegex() {
      return this.minuteEx() + " " + this.hoursEx() + " " + this.dayMonthEx() + " " + this.monthEx() + " " + this.dayWeekEx();
    } // setSpecInd(ind, value)

  }, {
    key: "setAllOn",
    value: function setAllOn() {
      this.expression = "* * * * *";
    }
  }, {
    key: "everyMinute",
    value: function everyMinute() {
      return "* * * * *";
    }
  }, {
    key: "everyFiveMinutes",
    value: function everyFiveMinutes() {
      return "*/5 * * * *";
    }
  }, {
    key: "everyTenMinutes",
    value: function everyTenMinutes() {
      return "*/10 * * * *";
    }
  }, {
    key: "everyFifteenMinutes",
    value: function everyFifteenMinutes() {
      return "*/15 * * * *";
    }
  }, {
    key: "everyThirtyMinutes",
    value: function everyThirtyMinutes() {
      return "0,30 * * * *";
    }
  }, {
    key: "hourly",
    value: function hourly() {
      return "0 * * * *";
    }
  }, {
    key: "daily",
    value: function daily() {
      return "0 0 * * *";
    }
  }, {
    key: "weekdays",
    value: function weekdays() {
      return "* * * * 1-5";
    }
  }, {
    key: "weekends",
    value: function weekends() {
      return "* * * * 0,6";
    }
  }, {
    key: "days",
    value: function days(_days) {
      return "* * * * " + _days.join(',');
    }
  }, {
    key: "mondays",
    value: function mondays() {
      return this.days([1]);
    }
  }, {
    key: "tuesdays",
    value: function tuesdays() {
      return this.days([2]);
    }
  }, {
    key: "wednesdays",
    value: function wednesdays() {
      return this.days([3]);
    }
  }, {
    key: "thursdays",
    value: function thursdays() {
      return this.days([4]);
    }
  }, {
    key: "fridays",
    value: function fridays() {
      return this.days([5]);
    }
  }, {
    key: "saturdays",
    value: function saturdays() {
      return this.days([6]);
    }
  }, {
    key: "sundays",
    value: function sundays() {
      return this.days([0]);
    }
  }, {
    key: "yearly",
    value: function yearly() {
      return "0 0 1 1 *";
    }
  }, {
    key: "weekly",
    value: function weekly() {
      return "0 0 * * 0";
    }
  }, {
    key: "monthly",
    value: function monthly() {
      return "0 0 1 * *";
    }
  }, {
    key: "quarterly",
    value: function quarterly() {
      return "0 0 1 1-12/3 *";
    }
  }, {
    key: "isValidExpression",
    value: function isValidExpression(exp) {
      return this.cronEx.test(exp);
    }
  }]);

  return Cronexpression;
}();